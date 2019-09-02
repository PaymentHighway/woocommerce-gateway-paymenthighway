<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit859b0f0a5115ea4e3fdcf919b171e5d4
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Solinor\\PaymentHighway\\' => 23,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
            'Ramsey\\Uuid\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Solinor\\PaymentHighway\\' => 
        array (
            0 => __DIR__ . '/..' . '/solinor/paymenthighwayio/src',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit859b0f0a5115ea4e3fdcf919b171e5d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit859b0f0a5115ea4e3fdcf919b171e5d4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit859b0f0a5115ea4e3fdcf919b171e5d4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
