<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ffab06fe807370dc652470638ca872d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ffab06fe807370dc652470638ca872d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ffab06fe807370dc652470638ca872d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ffab06fe807370dc652470638ca872d::$classMap;

        }, null, ClassLoader::class);
    }
}
