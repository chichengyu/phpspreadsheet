<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite898ff6f47eee3f7e827b94e17835560
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite898ff6f47eee3f7e827b94e17835560::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite898ff6f47eee3f7e827b94e17835560::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
