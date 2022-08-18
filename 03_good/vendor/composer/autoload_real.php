<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbb0e8d62110f5c5f3a1b4c0121daccb9
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

        spl_autoload_register(array('ComposerAutoloaderInitbb0e8d62110f5c5f3a1b4c0121daccb9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb0e8d62110f5c5f3a1b4c0121daccb9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbb0e8d62110f5c5f3a1b4c0121daccb9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}