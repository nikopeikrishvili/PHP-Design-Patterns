<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;
}