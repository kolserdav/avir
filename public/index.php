<?php
require '../vendor/autoload.php';

use Avir\Router\Route;

$t1 = microtime();
$router = new Route();
$router->route();
$t2 = microtime();
echo $t2 - $t1;




