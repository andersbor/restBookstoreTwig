<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit363a8dab4a7838cb6c2c227b31b1822f
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit363a8dab4a7838cb6c2c227b31b1822f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}