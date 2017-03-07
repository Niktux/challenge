<?php

require('00-singleton.php');

$sg = Singleton::getInstance();

$sg2 = clone $sg;
$sg2->setTata('BOUH');

var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
