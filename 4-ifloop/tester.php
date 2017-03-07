<?php

require_once "lib.php";

if($argc<2)
{
    die("MISSING solution number\n");
}

$number = $argv[1];
$solution = include "$number.php";

test($solution->exec());
