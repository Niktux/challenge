<?php

interface SolutionCase
{
    /**
     * @return string
     */
    public function exec($min = 1, $max = 20);
}

function test($result)
{
    $expected = "12FIZZ4BUZZFIZZ78FIZZBUZZ11FIZZ1314FIZZBUZZ1617FIZZ19BUZZ";

    if($result === $expected)
    {
        echo "SUCCESS\n";

        return true;
    }

    echo sprintf(
        "FAIL\nYour output = %s\n",
        $result
    );

    return false;
}

function fizzbuzz($n)
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
