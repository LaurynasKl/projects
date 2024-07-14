<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa74bec6c04fcc3334cb9fbbc6bd4ac5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar1\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa74bec6c04fcc3334cb9fbbc6bd4ac5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa74bec6c04fcc3334cb9fbbc6bd4ac5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa74bec6c04fcc3334cb9fbbc6bd4ac5::$classMap;

        }, null, ClassLoader::class);
    }
}