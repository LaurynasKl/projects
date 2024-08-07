<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf0c41bc436bf9d9a8ca769c7ac593cee
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf0c41bc436bf9d9a8ca769c7ac593cee', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf0c41bc436bf9d9a8ca769c7ac593cee', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf0c41bc436bf9d9a8ca769c7ac593cee::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
