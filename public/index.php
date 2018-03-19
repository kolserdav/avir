<?php
require '../vendor/autoload.php';


var_dump( mail( 'serega12101983@gmail.com', '', 'This was sent with PHP.' ) ); // bool(true)



if ($_SERVER['REMOTE_ADDR'] == '188.162.77.118' && $_SERVER['SERVER_ADDR'] == '127.0.0.1'){
    echo 1;
}
