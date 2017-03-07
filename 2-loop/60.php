<?php

require_once "lib.php";

class Iteraraison implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        $it = new SmartIterator($min, $max);

        return implode("", iterator_to_array($it));
    }
}

class SmartIterator implements Iterator
{
    private
        $current,
        $min,
        $max;

    public function __construct($min, $max)
    {
        $this->current = null;
        $this->min = $min;
        $this->max = $max;
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
        $this->current = $this->min;
    }

    public function valid()
    {
        return $this->current <= $this->max;
    }
}

return new Iteraraison;
