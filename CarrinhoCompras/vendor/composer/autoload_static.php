<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd48d2ab60bd7a19530cd3b2b070aa334
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\classes\\Cart' => __DIR__ . '/../..' . '/app/classes/Cart.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd48d2ab60bd7a19530cd3b2b070aa334::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd48d2ab60bd7a19530cd3b2b070aa334::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd48d2ab60bd7a19530cd3b2b070aa334::$classMap;

        }, null, ClassLoader::class);
    }
}
