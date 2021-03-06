<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce52abb8077612a18d3b8b7bea471f0b
{
    public static $files = array (
        '6bc45d0537e6858fd179bdbc31d62c79' => __DIR__ . '/..' . '/raveren/kint/Kint.class.php',
        '948f0194cb27c34a94ba5252f4098906' => __DIR__ . '/../../..' . '/src/support/exceptions.php',
        '9588b2121cb2adabf673ef0d4b7f8b3a' => __DIR__ . '/../../..' . '/src/sandbox.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce52abb8077612a18d3b8b7bea471f0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce52abb8077612a18d3b8b7bea471f0b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
