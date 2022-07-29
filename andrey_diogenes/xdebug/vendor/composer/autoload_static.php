<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80f66f233215b27ea1864391db660102
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unialfa\\Phpxdebug\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unialfa\\Phpxdebug\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80f66f233215b27ea1864391db660102::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80f66f233215b27ea1864391db660102::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80f66f233215b27ea1864391db660102::$classMap;

        }, null, ClassLoader::class);
    }
}