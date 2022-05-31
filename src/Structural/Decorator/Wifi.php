<?php

namespace DesignPatterns\Structural\Decorator;

class Wifi extends BookingDecorator
{

    private const PRICE = 2;
    public function getTotalPrice(): float
    {
        return $this->decorator->getTotalPrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->decorator->getDescription(). '; with wifi';
    }
}