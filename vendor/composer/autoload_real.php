<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3b07bece1ec6328e4730e69614d92ff3
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

        spl_autoload_register(array('ComposerAutoloaderInit3b07bece1ec6328e4730e69614d92ff3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3b07bece1ec6328e4730e69614d92ff3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3b07bece1ec6328e4730e69614d92ff3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
