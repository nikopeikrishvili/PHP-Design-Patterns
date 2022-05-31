<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{
    private Car $car;
    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function addDoors(): void
    {
        $this->car->setPart('FLDoor', new Door());
        $this->car->setPart('FRDoor', new Door());
        $this->car->setPart('BRDoor', new Door());
        $this->car->setPart('BLDoor', new Door());
        $this->car->setPart('BDoor', new Door());
    }

    public function addWheels(): void
    {
        $this->car->setPart('FLWheel', new Wheel());
        $this->car->setPart('FRWheel', new Wheel());
        $this->car->setPart('BLWheel', new Wheel());
        $this->car->setPart('BRWheel', new Wheel());
    }

    public function addEngine(): void
    {
        $this->car->setPart('Engine', new Engine());
    }

    public function getVehicle(): AbstractVehicle
    {
        return $this->car;
    }
}