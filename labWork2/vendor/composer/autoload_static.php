<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0029c104e1bcca18df9efbdb6dcb0ce7
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aleck\\LabWork2\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aleck\\LabWork2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0029c104e1bcca18df9efbdb6dcb0ce7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0029c104e1bcca18df9efbdb6dcb0ce7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0029c104e1bcca18df9efbdb6dcb0ce7::$classMap;

        }, null, ClassLoader::class);
    }
}