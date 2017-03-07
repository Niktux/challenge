<?php

require_once "lib.php";

class GotoCity implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        $buffer = '';
        $i = $min;

        begin:
        $buffer .= fizzbuzz($i);

        if($i < $max)
        {
            $i++;
            goto begin;
        }

        return $buffer;
    }
}

return new GotoCity;
