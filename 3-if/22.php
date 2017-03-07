<?php

require_once "lib.php";

class WithOneArray implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        return [$n, 'FIZZ', 'BUZZ', 'FIZZBUZZ'][ ($n % 3 === 0) + ($n % 5 === 0) * 2 ];
    }
}

return new WithOneArray;
