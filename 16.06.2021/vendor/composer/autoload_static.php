<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7956f332e5fc202023301a722db575ba
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'W1020\\HTML\\' => 11,
            'W1020\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'W1020\\HTML\\' => 
        array (
            0 => __DIR__ . '/..' . '/w1020/html/src',
        ),
        'W1020\\' => 
        array (
            0 => __DIR__ . '/..' . '/w1020/orm/W1020',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7956f332e5fc202023301a722db575ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7956f332e5fc202023301a722db575ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7956f332e5fc202023301a722db575ba::$classMap;

        }, null, ClassLoader::class);
    }
}