<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc61f9492d616492aa5273991a03c1b64
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ScssPhp\\ScssPhp\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc61f9492d616492aa5273991a03c1b64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc61f9492d616492aa5273991a03c1b64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc61f9492d616492aa5273991a03c1b64::$classMap;

        }, null, ClassLoader::class);
    }
}
