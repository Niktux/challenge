<?php

require_once "lib.php";

if($argc<2)
{
    die("MISSING solution number\n");
}

$number = $argv[1];
$fb = include "$number.php";

$solution = new Solution();
test($solution->exec($fb));
