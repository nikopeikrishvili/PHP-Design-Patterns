<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface LoggerInterface
{
    public function log(string $message): void;
}