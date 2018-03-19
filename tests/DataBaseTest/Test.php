<?php

namespace Tests\DataBaseTest;

use Avir\DataBase\DbConfig;
use Avir\DataBase\DbConnect;
use Avir\DataBase\Dbpdo;
use PHPUnit\Framework\TestCase;
use Avir\Config\Config;

class DatabaseTest extends TestCase
{
    public function testDependencyInjection()
    {
        $conf = Config::get();

        $config = new DbConfig($conf['host'], $conf['port'], $conf['user'], $conf['password'], $conf['charset']);
        $connection = new DbConnect($config);
        $pdo = new Dbpdo();

        $this->assertEquals("$conf[user]:$conf[password]@$conf[host]:$conf[port]", $connection->getDsn());
        $this->assertEquals(new \PDO($connection->getDsn()),$pdo->db() );
    }
}
