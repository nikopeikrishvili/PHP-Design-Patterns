<?php

namespace DesignPatterns\Creational\Builder;

class Director
{
    public function Build(BuilderInterface $builder): AbstractVehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheels();
        return $builder->getVehicle();
    }
}