<?php

namespace Core;

class App
{
    protected static Container $container;

    public static function setContainer($container) {
        static::$container = $container;
    }

    public static function container(): Container {
        return static::$container;
    }

    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }

    /**
     * @throws \Exception
     */
    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}