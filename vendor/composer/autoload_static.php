<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7925c50df324d746b78bee84460f702f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sendpulse\\RestApi\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sendpulse\\RestApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendpulse/rest-api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7925c50df324d746b78bee84460f702f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7925c50df324d746b78bee84460f702f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7925c50df324d746b78bee84460f702f::$classMap;

        }, null, ClassLoader::class);
    }
}
