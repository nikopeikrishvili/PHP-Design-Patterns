<?php

namespace DesignPatterns\Structural\Bridge;

class HelloWorldService extends BridgeService
{
    public function get(): string
    {
        $this->formatter->format('Hello world');
    }

}