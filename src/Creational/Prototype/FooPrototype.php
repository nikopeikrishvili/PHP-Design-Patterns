<?php

namespace DesignPatterns\Creational\Prototype;

class FooPrototype extends BookPrototype
{
    private string $category = 'foo';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}