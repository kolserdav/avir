<?php

namespace Avir\DataBase;


class DBpdo extends DBobject
{
    public function setOptions(string $prefix = 'main')
    {
        // TODO: Implement setOptions() method.
    }

    public function db()
    {
        return $this->createPDO();
    }
}