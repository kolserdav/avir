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
     * #Get a configuration from /.config
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