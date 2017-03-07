<?php

require('40-singleton.php');

$sg = Singleton::getInstance();

// We can use Reflection but it's slow
// let's do it faster !
$closure = function & () {
    return Singleton::$instance;
};
$instance = & (Closure::bind($closure, null, $sg))();

$instance = null;
$sg2 = Singleton::getInstance();
$sg2->setTata('BOUH');

$instance = null;
$sg3 = Singleton::getInstance();
$sg3->setTata('I WANT A MEDAL');

var_dump(sprintf(
    "%s <> %s <> %s",
    $sg->getTata(),
    $sg2->getTata(),
    $sg3->getTata()
));
