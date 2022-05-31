<?php

namespace DesignPatterns\Creational\FactoryMethod\test;

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdOutLogger;
use DesignPatterns\Creational\FactoryMethod\StdOutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function test_factory_returns_file_logger()
    {
        $loggerFactory = new FileLoggerFactory();
        $this->assertInstanceOf(FileLogger::class, $loggerFactory->createLogger());
    }

    public function test_factory_returns_stdout_logger()
    {
        $loggerFactory = new StdOutLoggerFactory();
        $this->assertInstanceOf(StdOutLogger::class, $loggerFactory->createLogger());
    }
}