<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit723f6f85193123aff3b8673b0ced19e1
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit723f6f85193123aff3b8673b0ced19e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit723f6f85193123aff3b8673b0ced19e1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
