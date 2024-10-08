<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97e3197d732e8a6b37307b88a400abd2
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WC_Better_Shipping_Calculator_for_Brazil\\Core\\' => 46,
            'WC_Better_Shipping_Calculator_for_Brazil\\' => 41,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WC_Better_Shipping_Calculator_for_Brazil\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'WC_Better_Shipping_Calculator_for_Brazil\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97e3197d732e8a6b37307b88a400abd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97e3197d732e8a6b37307b88a400abd2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97e3197d732e8a6b37307b88a400abd2::$classMap;

        }, null, ClassLoader::class);
    }
}
