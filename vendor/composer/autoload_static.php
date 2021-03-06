<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfb5572fc662f813c167b0c71f3f0f9d
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfb5572fc662f813c167b0c71f3f0f9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfb5572fc662f813c167b0c71f3f0f9d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
