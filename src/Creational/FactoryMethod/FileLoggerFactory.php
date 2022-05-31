<?php

namespace DesignPatterns\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactoryInterface
{

    public function createLogger(): LoggerInterface
    {
        return new FileLogger(fileLocation: 'path');
    }
}