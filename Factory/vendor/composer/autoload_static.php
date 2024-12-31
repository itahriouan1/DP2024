<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ee9d57cb615ccf49c8d258323d63985
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ee9d57cb615ccf49c8d258323d63985::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ee9d57cb615ccf49c8d258323d63985::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ee9d57cb615ccf49c8d258323d63985::$classMap;

        }, null, ClassLoader::class);
    }
}