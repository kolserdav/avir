<?php
require '../vendor/autoload.php';
use Avir\Database\Modules\DBpdo;

//var_dump( mail( 'serega12101983@gmail.com', '', 'This was sent with PHP.' ) ); // bool(true)

$pdo = new DBpdo();
//var_dump($pdo);
$pdd = $pdo->getPDO();
$pd = $pdd->query('INSERT INTO `baseAmazBase`.`users` (`name`, `email`) VALUES (\'sad\', \'as\')');
var_dump($pd);

if ($_SERVER['REMOTE_ADDR'] == '188.162.77.118' && $_SERVER['SERVER_ADDR'] == '127.0.0.1'){
    echo 1;
}
