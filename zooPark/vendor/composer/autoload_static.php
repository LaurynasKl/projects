<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca7f45a8643718e6a4cdd427976a5739
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZooPark\\' => 8,
        ),
        'A' => 
        array (
            'App\\DB\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZooPark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/DB',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca7f45a8643718e6a4cdd427976a5739::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca7f45a8643718e6a4cdd427976a5739::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca7f45a8643718e6a4cdd427976a5739::$classMap;

        }, null, ClassLoader::class);
    }
}
