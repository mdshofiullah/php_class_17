<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4545889777543c8598756988ba9bd5d2
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4545889777543c8598756988ba9bd5d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4545889777543c8598756988ba9bd5d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4545889777543c8598756988ba9bd5d2::$classMap;

        }, null, ClassLoader::class);
    }
}
