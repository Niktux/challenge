<?php

require_once "lib.php";

class WithArray implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        $arr3 = ['FIZZ', '', ''];
        $arr5 = ['BUZZ', '', '', '', ''];
        $arrLen = [$n, ''];

        $result = $arr3[$n % 3] . $arr5[$n % 5];
        $result .= $arrLen[ strlen($result) !== 0 ];

        return $result;
    }
}

return new WithArray;
