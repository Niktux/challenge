<?php

require_once "lib.php";

class LinkedList implements SolutionCase
{
    // NOT MINMAX COMPLIANT
    public function exec($min = 1, $max = 20)
    {
        $start = new Number(1);

        $n = $start->link(new Number(2));
        $n = $n->link(new Number(3));
        $n = $n->link(new Number(4));
        $n = $n->link(new Number(5));
        $n = $n->link(new Number(6));
        $n = $n->link(new Number(7));
        $n = $n->link(new Number(8));
        $n = $n->link(new Number(9));
        $n = $n->link(new Number(10));
        $n = $n->link(new Number(11));
        $n = $n->link(new Number(12));
        $n = $n->link(new Number(13));
        $n = $n->link(new Number(14));
        $n = $n->link(new Number(15));
        $n = $n->link(new Number(16));
        $n = $n->link(new Number(17));
        $n = $n->link(new Number(18));
        $n = $n->link(new Number(19));
        $n = $n->link(new Number(20));

        return $start->transform();
    }
}

class Number
{
    private
        $n,
        $next;

    public function __construct($n)
    {
        $this->n = $n;
        $this->next = null;
    }

    public function link(Number $n)
    {
        $this->next = $n;

        return $n;
    }

    public function transform()
    {
        $buffer = fizzbuzz($this->n);

        if($this->next instanceof Number)
        {
            $buffer .= $this->next->transform();
        }

        return $buffer;
    }
}

return new LinkedList;
