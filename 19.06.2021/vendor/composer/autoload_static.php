<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf92139c88116064ab36312ce1fca542f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf92139c88116064ab36312ce1fca542f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf92139c88116064ab36312ce1fca542f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf92139c88116064ab36312ce1fca542f::$classMap;

        }, null, ClassLoader::class);
    }
}