<?php

namespace DesignPatterns\Creational\Builder;

interface BuilderInterface
{
    public function createVehicle(): void;
    public function addDoors(): void;
    public function addWheels(): void;
    public function addEngine(): void;
    public function getVehicle(): AbstractVehicle;

}