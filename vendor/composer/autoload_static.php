<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bb9b5bfec6f9e71100726328bc24bc9
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bb9b5bfec6f9e71100726328bc24bc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bb9b5bfec6f9e71100726328bc24bc9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bb9b5bfec6f9e71100726328bc24bc9::$classMap;

        }, null, ClassLoader::class);
    }
}
