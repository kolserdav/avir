<?php
// получает содержимое файла в строку
$filename = "../a.out";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
var_dump($contents);
