<?php

namespace Avir\Re;
use PDO;
class Re {

    public function ass(){
        $r = 434394859;
        $l = 4837462637489;
        $t = 3534545;
        $s = $r/$t-$r+$l;
        echo $s."<br>";
    }
}
$this->dsn = "mysql:host = $this->host;port = $this->port, dbname = $this->db;\
        charset=$this->charset";
$this->opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);