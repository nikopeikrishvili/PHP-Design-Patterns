<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\VehiclePartInterface;

class AbstractVehicle
{
    public function setPart(string $key, VehiclePartInterface $part): void{

    }
}