<?php

require('10-singleton.php');

$sg = Singleton::getInstance();

$sg2 = unserialize(serialize($sg));
$sg2->setTata('BOUH');

var_dump(sprintf(
    "%s <> %s",
    $sg->getTata(),
    $sg2->getTata()
));
