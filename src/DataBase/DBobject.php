<?php

namespace Avir\DataBase;

use PDO;

abstract class DBobject
{
    /**
     * Options PDO
     * @var array
     */
    protected $opt;
    protected $config;
    /**
     * @param string $prefix
     * @return mixed
     */
    abstract protected function setOptions(string $prefix = 'main');
    /**
     * @param string $prefix = 'main'
     * @return PDO
     */
    public function createPDO(string $prefix = 'main')
    {
        $options = new DBoptions();
        $options->setOptions($prefix);
        $configure = new DBdsn();
        $configure->setOptions($prefix);
        return new PDO($configure, $options);
    }

}