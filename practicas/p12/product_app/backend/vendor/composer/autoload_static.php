<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit806adb67becb1b585ff0ca0da016632e
{
    public static $prefixLengthsPsr4 = array (
        'T' =>
        array (
            'TECWEB\\MYAPI\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TECWEB\\MYAPI\\' =>
        array (
            0 => __DIR__ . '/../..' . '/myapi',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit806adb67becb1b585ff0ca0da016632e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit806adb67becb1b585ff0ca0da016632e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit806adb67becb1b585ff0ca0da016632e::$classMap;

        }, null, ClassLoader::class);
    }
}