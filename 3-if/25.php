<?php

require_once "lib.php";

class WithDifferentComputation implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        $results = [
            0 => function ($n) {
                return $n;
            },
            1 => function ($n) {
                return 'FIZZ';
            },
            2 => function ($n) {
                return 'BUZZ';
            },
            3 => function ($n) {
                return 'FIZZBUZZ';
            },
        ];

        return $results[ ($n % 3 === 0) + ($n % 5 === 0) * 2 ]($n);
    }
}

return new WithDifferentComputation;
