<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0f23437075b4cdebd3b4cd385228fab
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Avir\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Avir\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0f23437075b4cdebd3b4cd385228fab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0f23437075b4cdebd3b4cd385228fab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}