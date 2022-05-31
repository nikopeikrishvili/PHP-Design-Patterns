<?php

namespace DesignPatterns\Structural\DependencyInjection\test;

use DesignPatterns\Structural\DependencyInjection\DataBaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends \PHPUnit\Framework\TestCase
{
    public function testConfigLoadedFromConfigClass()
    {
        $configuration = new DataBaseConfiguration('127.0.0.1', 3306, 'root', 'toor');
        $connection = new DatabaseConnection($configuration);
        $this->assertSame('127.0.0.1:3306:root:toor', $connection->getDSN());
    }
}