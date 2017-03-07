<?php

require('30-singleton.php');


$sg = Singleton::getInstance();

class Pouet extends Singleton
{
    public function __construct()
    {
    }
}

$sg2 = new Pouet();

$sg2->setTata('BOUH');
var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));

var_dump($sg2 instanceof Singleton);
