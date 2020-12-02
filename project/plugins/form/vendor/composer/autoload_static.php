<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd927ac3ef1b5f918cf2a06169b07f225
{
    public static $classMap = array (
        'Flextype\\Plugin\\Form\\Models\\Fieldsets' => __DIR__ . '/../..' . '/app/Models/Fieldsets.php',
        'Flextype\\Plugin\\Form\\Models\\Form' => __DIR__ . '/../..' . '/app/Models/Form.php',
        'Flextype\\Plugin\\Form\\Twig\\FormTwig' => __DIR__ . '/../..' . '/twig/FormTwigExtension.php',
        'Flextype\\Plugin\\Form\\Twig\\FormTwigExtension' => __DIR__ . '/../..' . '/twig/FormTwigExtension.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd927ac3ef1b5f918cf2a06169b07f225::$classMap;

        }, null, ClassLoader::class);
    }
}
