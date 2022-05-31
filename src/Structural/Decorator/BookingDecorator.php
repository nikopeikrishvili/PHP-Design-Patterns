<?php

namespace DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements DecoratorInterface
{
    public function __construct(protected readonly DecoratorInterface $decorator)
    {

    }
}