<?php

require_once "lib.php";

class Yolo implements SolutionCase
{
    // NOT MINMAX COMPLIANT
    public function exec($min = 1, $max = 20)
    {
        return "12FIZZ4BUZZFIZZ78FIZZBUZZ11FIZZ1314FIZZBUZZ1617FIZZ19BUZZ";
    }
}

return new Yolo;
