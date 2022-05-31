<?php

namespace DesignPatterns\Creational\Builder\Test;

use DesignPatterns\Creational\Builder\Car;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends  TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $truck = (new Director())->Build($truckBuilder);
        $this->assertInstanceOf(Truck::class, $truck);
    }
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $car = (new Director())->Build($carBuilder);
        $this->assertInstanceOf(Car::class, $car);
    }
}