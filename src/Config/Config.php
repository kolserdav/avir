<?php

namespace Avir\Config;

use Symfony\Component\Yaml\Yaml;

class Config
{
    /**
     * @var array
     */
    protected static $config;
    /**
     * #Get a configuration
     * @return array
     */
    public static function get()
    {
        if(empty(self::$config)) {
            self::$config =  Yaml::parseFile(__DIR__ . '/../../.config');
        }
        return self::$config;
    }
}