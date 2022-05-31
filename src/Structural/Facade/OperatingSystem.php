<?php

namespace DesignPatterns\Structural\Facade;

interface OperatingSystem
{
    public function getName():string;

    public function halt():void;
}