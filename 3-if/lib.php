<?php

interface FizzBuzz
{
    /**
     * @return string
     */
    public function fizzbuzz($n);
}

class Solution
{
    public function exec(FizzBuzz $fb, $min = 1, $max = 20)
    {
        $buffer = '';
        for($i = $min; $i <= $max; $i++)
        {
            $buffer .= $fb->fizzbuzz($i);
        }

        return $buffer;
    }
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
