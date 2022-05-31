<?php

namespace DesignPatterns\Structural\FluentInterface\test;

use DesignPatterns\Structural\FluentInterface\SQLBuilder;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testSqlIsReturned()
    {
        $sqlBuilder = new SQLBuilder();
        $sqlBuilder->from('test_db');
        $sqlBuilder->select(['name','last_name']);
        $sqlBuilder->where('name="niko"');
        $this->assertSame('SELECT name, last_name FROM test_db WHERE name="niko"', $sqlBuilder->__toString());
    }
}