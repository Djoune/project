<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf64c6b16f9ab97d89bb23e64f2078f20
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf64c6b16f9ab97d89bb23e64f2078f20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf64c6b16f9ab97d89bb23e64f2078f20::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf64c6b16f9ab97d89bb23e64f2078f20::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
