<?php

require_once "lib.php";

class WithIf implements FizzBuzz
{
    public function fizzbuzz($n)
    {
        $result = '';

        if($n % 3 === 0)
        {
            $result .=  "FIZZ";
        }

        if($n % 5 === 0)
        {
            $result .= "BUZZ";
        }

        if(! empty($result))
        {
            return $result;
        }

        return "$n";
    }
}

return new WithIf;
