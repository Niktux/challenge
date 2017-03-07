<?php

require_once "lib.php";

class WithTernary implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        $result = '';
        $result .=  $n % 3 ? '' : "FIZZ";
        $result .=  $n % 5 ? '' : "BUZZ";
        $result .= empty($result) ? $n : '';

        return $result;
    }
}

return new WithTernary;
