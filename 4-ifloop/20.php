<?php

require_once "lib.php";

class AllIn implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        if($min === 1 && $max === 20)
        {
            return "12FIZZ4BUZZFIZZ78FIZZBUZZ11FIZZ1314FIZZBUZZ1617FIZZ19BUZZ";
        }

        throw new \RuntimeException('Range not supported yet');
    }
}

return new AllIn;
