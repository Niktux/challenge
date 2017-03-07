<?php

require('00-singleton.php');

$sg = Singleton::getInstance();
$sg2 = Singleton::getInstance();

$sg2->setTata('BOUH');

var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
