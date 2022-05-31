<?php

namespace DesignPatterns\Structural\Decorator;

class ExtraBed extends BookingDecorator
{

    private const PRICE = 20;
    public function getTotalPrice(): float
    {
        return $this->decorator->getTotalPrice()+ self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->decorator->getDescription(). '; with extra bed';
    }
}