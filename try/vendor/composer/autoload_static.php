<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit389bd061dd67330175cb7ae9c613cb32
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit389bd061dd67330175cb7ae9c613cb32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit389bd061dd67330175cb7ae9c613cb32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit389bd061dd67330175cb7ae9c613cb32::$classMap;

        }, null, ClassLoader::class);
    }
}
