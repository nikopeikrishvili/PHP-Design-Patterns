<?php

namespace DesignPatterns\Structural\Decorator;

class DoubleBedBooking implements DecoratorInterface
{

    public function getTotalPrice(): float
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'Double bed room';
    }
}