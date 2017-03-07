<?php

require('40-singleton.php');

$sg = Singleton::getInstance();

$property = new ReflectionProperty('Singleton', 'instance');
$property->setAccessible(true);
$property->setValue(null);

$sg2 = Singleton::getInstance();
$sg2->setTata('BOUH');

var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
