<?php

namespace DesignPatterns\Structural\Facade;

interface BIOS
{
    public function execute(): void;
    public function waitForKeyPress(): void;
    public function launch(OperatingSystem $os): void;
    public function powerDown(): void;
}