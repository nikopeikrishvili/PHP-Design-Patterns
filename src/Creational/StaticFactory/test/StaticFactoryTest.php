<?php

namespace DesignPatterns\Creational\StaticFactory\test;

use DesignPatterns\Creational\StaticFactory\NumberFormatter;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use DesignPatterns\Creational\StaticFactory\StringFormatter;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testReturnsNumberFormatter()
    {
        $this->assertInstanceOf(NumberFormatter::class, StaticFactory::create('number'));
    }
    public function testReturnsStringFormatter()
    {
        $this->assertInstanceOf(StringFormatter::class, StaticFactory::create('string'));
    }

    public function testThrowsExceptionForUnknownFormat()
    {
        $this->expectException(\InvalidArgumentException::class);
        StaticFactory::create('unknowntype');
    }
}