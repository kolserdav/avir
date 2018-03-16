<?php

require '../vendor/autoload.php';

use Avir\Re\Re;

$re = new Re();
$time1 = microtime();
echo shell_exec("../a.out");
$re->ass();
$time2 = microtime();
echo $time2 - $time1;
echo '<br>tsest2w';
