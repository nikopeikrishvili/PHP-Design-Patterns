<?php

namespace DesignPatterns\Structural\Decorator;

interface DecoratorInterface
{
    public function getTotalPrice(): float;
    public function getDescription(): string;
}