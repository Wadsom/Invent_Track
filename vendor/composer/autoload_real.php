<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit38d952cc7c3077bb03a8d36fed7538d3
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

        spl_autoload_register(array('ComposerAutoloaderInit38d952cc7c3077bb03a8d36fed7538d3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit38d952cc7c3077bb03a8d36fed7538d3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit38d952cc7c3077bb03a8d36fed7538d3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
