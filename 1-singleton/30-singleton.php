<?php

class Singleton
{
    private static $instance = null;

    private
        $tata;

    private function __construct()
    {
        $this->tata = 51;
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getTata()
    {
        return $this->tata;
    }

    public function setTata($value)
    {
        $this->tata = $value;
    }
}
