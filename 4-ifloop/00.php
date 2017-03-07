<?php

require_once "lib.php";

class AllIn implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        return implode("", array_map(function(& $n) {
            return [$n, 'FIZZ', 'BUZZ', 'FIZZBUZZ'][ ($n % 3 === 0) + ($n % 5 === 0) * 2 ];
        }, range($min, $max, 1)));
    }
}

return new AllIn;
