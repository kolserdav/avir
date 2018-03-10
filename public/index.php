<?php
$time1 = microtime();
echo shell_exec("../a.out");
$time2 = microtime();
echo $time2 - $time1;