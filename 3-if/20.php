<?php

require_once "lib.php";

class WithOneArray implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        $results = [$n, 'FIZZ', 'BUZZ', 'FIZZBUZZ'];

        return $results[ ($n % 3 === 0) + ($n % 5 === 0) * 2 ];
    }
}

return new WithOneArray;
