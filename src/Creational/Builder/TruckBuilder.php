<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class TruckBuilder implements BuilderInterface
{
    private Truck $truck;
    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function addDoors(): void
    {
        $this->truck->setPart('frontDoor', new Door());
        $this->truck->setPart('backDoor', new Door());
    }

    public function addWheels(): void
    {
        $this->truck->setPart('FLWheel', new Wheel());
        $this->truck->setPart('FRWheel', new Wheel());
        $this->truck->setPart('BLWheel', new Wheel());
        $this->truck->setPart('BRWheel', new Wheel());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('Engine', new Engine());
    }

    public function getVehicle(): AbstractVehicle
    {
        return $this->truck;
    }
}