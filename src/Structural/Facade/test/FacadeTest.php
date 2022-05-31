<?php

namespace DesignPatterns\Structural\Facade\test;

use DesignPatterns\Structural\Facade\BIOS;
use DesignPatterns\Structural\Facade\Facade;
use DesignPatterns\Structural\Facade\OperatingSystem;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->createMock(BIOS::class);

        $bios->method('launch')
            ->with($os);

        /** @noinspection PhpParamsInspection */
        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}