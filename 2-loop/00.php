<?php

require_once "lib.php";

class WithLoop implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        $buffer = '';
        for($i = $min; $i <= $max; $i++)
        {
            $buffer .= fizzbuzz($i);
        }

        return $buffer;
    }
}

return new WithLoop;
