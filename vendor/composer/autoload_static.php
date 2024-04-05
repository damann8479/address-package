<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff35ffc5aa0a98a507aeb793a3937bda
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Damann8479\\Address\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Damann8479\\Address\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff35ffc5aa0a98a507aeb793a3937bda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff35ffc5aa0a98a507aeb793a3937bda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff35ffc5aa0a98a507aeb793a3937bda::$classMap;

        }, null, ClassLoader::class);
    }
}