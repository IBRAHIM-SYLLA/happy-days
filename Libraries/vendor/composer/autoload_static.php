<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit952d276ae9120c8a0bcf850b17787931
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit952d276ae9120c8a0bcf850b17787931::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit952d276ae9120c8a0bcf850b17787931::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit952d276ae9120c8a0bcf850b17787931::$classMap;

        }, null, ClassLoader::class);
    }
}
