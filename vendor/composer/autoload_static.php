<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38d952cc7c3077bb03a8d36fed7538d3
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
            0 => __DIR__ . '/../..' . '/Back_End/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38d952cc7c3077bb03a8d36fed7538d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38d952cc7c3077bb03a8d36fed7538d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38d952cc7c3077bb03a8d36fed7538d3::$classMap;

        }, null, ClassLoader::class);
    }
}