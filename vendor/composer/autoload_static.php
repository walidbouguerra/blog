<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4164efe35fd0e886e6a49caa101cc33e
{
    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\' => 1,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4164efe35fd0e886e6a49caa101cc33e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4164efe35fd0e886e6a49caa101cc33e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4164efe35fd0e886e6a49caa101cc33e::$classMap;

        }, null, ClassLoader::class);
    }
}
