<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitff35ffc5aa0a98a507aeb793a3937bda
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

        spl_autoload_register(array('ComposerAutoloaderInitff35ffc5aa0a98a507aeb793a3937bda', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitff35ffc5aa0a98a507aeb793a3937bda', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitff35ffc5aa0a98a507aeb793a3937bda::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}