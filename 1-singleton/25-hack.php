<?php

require('22-singleton.php');


$sg = Singleton::getInstance();


class Doubleton
{
    private
        $tata = 51;
}

$sg2 = serialize(new Doubleton);
$sg2 = str_replace('9:"Doubleton"', '9:"Singleton"', $sg2);
$sg2 = unserialize($sg2);

$sg2->setTata('BOUH');

var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
