<?php

namespace DesignPatterns\Structural\Facade;

class Facade
{
    public function __construct( private readonly BIOS $bios, private readonly OperatingSystem $os)
    {
    }

    public function turnOn():void
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turOff(): void
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}