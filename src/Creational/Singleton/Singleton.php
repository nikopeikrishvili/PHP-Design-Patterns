<?php

namespace DesignPatterns\Creational\Singleton;

final class Singleton
{

    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if(static::$instance === null)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }
    private function __construct()
    {
    }

    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }
    public function __wakeup(): void
    {
        Throw new \Exception("Unserialization of singleton is not allowed");
    }
}