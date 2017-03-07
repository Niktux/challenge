<?php

require_once "lib.php";

class AllIn implements SolutionCase
{
    public function exec($min = 1, $max = 20)
    {
        return implode("", iterator_to_array(new LimitIterator(
            new class implements Iterator {
                private $current = 0;

                public function current() {
                    return [$this->current, 'FIZZ', 'BUZZ', 'FIZZBUZZ'][ ($this->current % 3 === 0) + ($this->current % 5 === 0) * 2 ];
                }

                public function key() { return $this->current; }
                public function next() { $this->current++; }
                public function rewind() { $this->current = 0; }
                public function valid() { return true; }
            },
            1, 20
        )));
    }
}

return new AllIn;
