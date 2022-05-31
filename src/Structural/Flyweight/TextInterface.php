<?php

namespace DesignPatterns\Structural\Flyweight;

interface TextInterface
{
    public function render(string $extrinsicState): string;
}