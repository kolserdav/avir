<?php

namespace Tests\DataBaseTest;

use Avir\DataBase\DbConfig;
use Avir\DataBase\DbConnect;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class DatabaseTest extends TestCase
{
    public function testDependencyInjection()
    {
        $conf = Yaml::parseFile(__DIR__.'/../../.config');
        $config = new DbConfig($conf['host'], $conf['port'], $conf['user'], $conf['password'], $conf['charset']);
        $connection = new DbConnect($config);

        $this->assertEquals("$conf[user]:$conf[password]@$conf[host]:$conf[port]", $connection->getDsn());
    }
}
