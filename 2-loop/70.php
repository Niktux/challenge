<?php

require_once "lib.php";

declare(ticks=1);

class TickEtTack implements SolutionCase
{
    private
        $buffer;

    public function exec($min = 1, $max = 20)
    {
        $this->buffer = '';

        $closure = function() use($min, $max) {
            static $i = 0;
            $i = $i < $min ? $min : $i;

            $this->buffer .= fizzbuzz($i++);

            if($i > $max)
            {
                throw new Exception;
            }
        };

        try
        {
            register_tick_function($closure);

            // No it's not a loop, it's a sample code that take time and have
            // many tickable low level operations
            for($i=0;$i<900000000;) $i++;
        }
        catch(Exception $e)
        {
            unregister_tick_function($closure);
        }

        return $this->buffer;
    }
}

return new TickEtTack;
