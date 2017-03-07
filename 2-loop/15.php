<?php

require_once "lib.php";

class Yolooo implements SolutionCase
{
    // NOT MINMAX COMPLIANT
    public function exec($min = 1, $max = 20)
    {
        $buffer = '';

        $buffer .= fizzbuzz(1);
        $buffer .= fizzbuzz(2);
        $buffer .= fizzbuzz(3);
        $buffer .= fizzbuzz(4);
        $buffer .= fizzbuzz(5);
        $buffer .= fizzbuzz(6);
        $buffer .= fizzbuzz(7);
        $buffer .= fizzbuzz(8);
        $buffer .= fizzbuzz(9);
        $buffer .= fizzbuzz(10);
        $buffer .= fizzbuzz(11);
        $buffer .= fizzbuzz(12);
        $buffer .= fizzbuzz(13);
        $buffer .= fizzbuzz(14);
        $buffer .= fizzbuzz(15);
        $buffer .= fizzbuzz(16);
        $buffer .= fizzbuzz(17);
        $buffer .= fizzbuzz(18);
        $buffer .= fizzbuzz(19);
        $buffer .= fizzbuzz(20);

        return $buffer;
    }
}

return new Yolooo;
