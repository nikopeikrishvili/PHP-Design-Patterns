<?php

namespace DesignPatterns\Structural\Bridge;

class PingService extends BridgeService
{

    public function get(): string
    {
        return $this->formatter->format('Pong');
    }
}