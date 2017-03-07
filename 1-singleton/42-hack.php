<?php

require('40-singleton.php');

$sg = Singleton::getInstance();
$ref = new ReflectionClass('Singleton');
try
{
    $sg2 = $ref->newInstance();
}
catch (Exception $e)
{
    echo "OK let's try another way !\n";
}

$sg2 = $ref->newInstanceWithoutConstructor();
var_dump($sg2->getTata());

$sg2->setTata('BOUH');
var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
