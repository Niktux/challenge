<?php

require('40-singleton.php');

$sg = Singleton::getInstance();

// We can use Reflection but it's slow
// let's do it faster !
$closure = function() {
    Singleton::$instance = null;
};
$closure = Closure::bind($closure, null, $sg);
$closure();

$sg2 = Singleton::getInstance();
$sg2->setTata('BOUH');

var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
