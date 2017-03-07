<?php

require_once "lib.php";

class MoreIter implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        $it = new LimitIterator(
            new SmartIterator(),
            1, 20
        );

        return implode("", iterator_to_array($it));
    }
}

class SmartIterator implements Iterator
{
    private
        $current;

    public function __construct()
    {
        $this->current = 0;
    }

    public function current()
    {
        return fizzbuzz($this->current);
    }

    public function key()
    {
        return $this->current;
    }

    public function next()
    {
        $this->current++;
    }

    public function rewind()
    {
        $this->current = 0;
    }

    public function valid()
    {
        return true;
    }
}

return new MoreIter;
