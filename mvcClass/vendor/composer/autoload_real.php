<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0073a0ab734084dc3f40a4fc93ece186
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit0073a0ab734084dc3f40a4fc93ece186', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0073a0ab734084dc3f40a4fc93ece186', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0073a0ab734084dc3f40a4fc93ece186::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
