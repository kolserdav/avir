<?php

namespace Avir\DataBase;

use Avir\DataBase\DbConnect;
use Avir\Config\Config;

class DBdsn extends DBobject
{
    /**
     * @param string $prefix
     * @return \Avir\DataBase\DbConnect
     */
    public function setOptions(string $prefix = 'main')
    {
        switch ($prefix) {
            case 'main':
                $conf = Config::get();
                $this->config = new DbConfig($conf['host'], $conf['port'], \
                $conf['user'], $conf['password'], $conf['charset']);
                return new DbConnect($this->config);
                break;
            default:
                throw new \InvalidArgumentException("$prefix is a not valid value");
        }
    }
}