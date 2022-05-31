<?php

namespace DesignPatterns\Structural\Bridge;

abstract class BridgeService
{
    public function __construct(protected FormatterInterface $formatter)
    {
    }

    public function setImplementation(FormatterInterface $formatter): void
    {
        $this->formatter = $formatter;
    }

    abstract public function get():string;
}