<?php

namespace Avir\DataBase;

use PDO;

class DBoptions extends DBobject
{
    /**
     * @param string $prefix
     * @return array
     */
    public function setOptions(string $prefix = 'main')
    {
        switch ($prefix) {
            case 'main':
                return $this->opt = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
            break;
            default:
                throw new \InvalidArgumentException("$prefix is not a valid value");
        }
    }
}