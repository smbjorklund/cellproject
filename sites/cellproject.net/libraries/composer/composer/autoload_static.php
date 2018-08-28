<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitComposerManager
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'Phpoaipmh\\Example\\' => 18,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Phpoaipmh\\Example\\' => 
        array (
            0 => __DIR__ . '/..' . '/caseyamcl/phpoaipmh/example/src',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Phpoaipmh' => 
            array (
                0 => __DIR__ . '/..' . '/caseyamcl/phpoaipmh/src',
                1 => __DIR__ . '/..' . '/caseyamcl/phpoaipmh/tests',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitComposerManager::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitComposerManager::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitComposerManager::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
