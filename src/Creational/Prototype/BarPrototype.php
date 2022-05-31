<?php

namespace DesignPatterns\Creational\Prototype;

class BarPrototype extends BookPrototype
{

    private string $category = 'bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}