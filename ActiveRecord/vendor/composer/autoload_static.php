<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc96cd14caad52c429ac5005616979d08
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc96cd14caad52c429ac5005616979d08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc96cd14caad52c429ac5005616979d08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc96cd14caad52c429ac5005616979d08::$classMap;

        }, null, ClassLoader::class);
    }
}
