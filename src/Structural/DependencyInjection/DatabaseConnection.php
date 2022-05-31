<?php

namespace DesignPatterns\Structural\DependencyInjection;

class DatabaseConnection
{
    public function __construct(private readonly DataBaseConfiguration $configuration)
    {
    }

    public function getDSN()
    {
        return sprintf('%s:%d:%s:%s', $this->configuration->getHost(), $this->configuration->getPort(), $this->configuration->getUsername(), $this->configuration->getPassword());
    }
}