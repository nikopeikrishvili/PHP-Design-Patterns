<?php

namespace DesignPatterns\Creational\FactoryMethod;

class FileLogger implements LoggerInterface
{

    public function __construct(private string $fileLocation)
    {
    }

    public function log(string $message): void
    {
        // TODO: Implement log() method.
    }
}