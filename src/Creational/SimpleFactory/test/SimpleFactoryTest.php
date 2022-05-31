<?php

namespace DesignPatterns\Creational\SimpleFactory\test;

use DesignPatterns\Creational\SimpleFactory\Bicycle;
use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testFactoryReturnsBicycle()
    {
        $factory = new SimpleFactory();
        $this->assertInstanceOf(Bicycle::class, $factory->createBicycle());
    }
}