<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0c41bc436bf9d9a8ca769c7ac593cee
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0c41bc436bf9d9a8ca769c7ac593cee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0c41bc436bf9d9a8ca769c7ac593cee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0c41bc436bf9d9a8ca769c7ac593cee::$classMap;

        }, null, ClassLoader::class);
    }
}