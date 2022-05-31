<?php

namespace DesignPatterns\Creational\Singleton\test;

use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends \PHPUnit\Framework\TestCase
{
    public function testWillGetSameInstance()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $instance1);

        $this->assertSame($instance1, $instance2);
    }
}