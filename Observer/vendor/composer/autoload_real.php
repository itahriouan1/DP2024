<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4cc50859fdb1f8c0742523ac07dbc1cf
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

        spl_autoload_register(array('ComposerAutoloaderInit4cc50859fdb1f8c0742523ac07dbc1cf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4cc50859fdb1f8c0742523ac07dbc1cf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4cc50859fdb1f8c0742523ac07dbc1cf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
