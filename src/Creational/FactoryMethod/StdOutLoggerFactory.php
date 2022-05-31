<?php

namespace DesignPatterns\Creational\FactoryMethod;

class StdOutLoggerFactory implements LoggerFactoryInterface
{

    public function createLogger(): LoggerInterface
    {
        return new StdOutLogger();
    }
}