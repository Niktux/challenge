<?php

require_once "lib.php";

class WithArrayMoreCompact implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        $arr3 = ['FIZZ', ''];
        $arr5 = ['BUZZ', ''];
        $arrLen = [$n, ''];

        $result = $arr3[$n % 3 !== 0] . $arr5[$n % 5 !== 0];
        $result .= $arrLen[ strlen($result) !== 0 ];

        return $result;
    }
}

return new WithArrayMoreCompact;
