<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbfe9647d68cd8c4aca7aefa3a46fe57b
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

        spl_autoload_register(array('ComposerAutoloaderInitbfe9647d68cd8c4aca7aefa3a46fe57b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbfe9647d68cd8c4aca7aefa3a46fe57b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbfe9647d68cd8c4aca7aefa3a46fe57b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
