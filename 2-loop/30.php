<?php

require_once "lib.php";

class ArrayWalkerTexasRanger implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        $numbers = range($min, $max, 1);

        array_walk($numbers, function(& $n) {
            $n = fizzbuzz($n);
        });

        return implode("", $numbers);
    }
}

return new ArrayWalkerTexasRanger;
