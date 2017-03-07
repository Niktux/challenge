<?php

require_once "lib.php";

class LinkedList implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        return (new Number($min))->transform($max);
    }
}

class Number
{
    private
        $n;

    public function __construct($n)
    {
        $this->n = $n;
    }

    public function next()
    {
        return new Number($this->n + 1);
    }

    public function transform($limit)
    {
        $buffer = fizzbuzz($this->n);

        if($this->n < $limit)
        {
            $buffer .= $this->next()->transform($limit);
        }

        return $buffer;
    }
}

return new LinkedList;
