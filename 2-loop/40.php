<?php

require_once "lib.php";

class RecursiveWay implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        return $this->compute($min, $max);
    }

    private function compute($n, $limit)
    {
        $buffer = fizzbuzz($n);

        if($n < $limit)
        {
            $buffer .= $this->compute($n + 1, $limit);
        }

        return $buffer;
    }
}

return new RecursiveWay;
