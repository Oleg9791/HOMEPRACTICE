<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddaf794cde9c616969fa60148e1cc20d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitddaf794cde9c616969fa60148e1cc20d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddaf794cde9c616969fa60148e1cc20d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddaf794cde9c616969fa60148e1cc20d::$classMap;

        }, null, ClassLoader::class);
    }
}