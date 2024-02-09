<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfebfaa86ce4e1891a3936751e333ff4b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Beecorp\\Bilmed\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Beecorp\\Bilmed\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfebfaa86ce4e1891a3936751e333ff4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfebfaa86ce4e1891a3936751e333ff4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfebfaa86ce4e1891a3936751e333ff4b::$classMap;

        }, null, ClassLoader::class);
    }
}
