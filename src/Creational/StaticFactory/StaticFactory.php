<?php

namespace DesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    public static function create(string $type): Formatter
    {
        if('number' === $type)  {
            return new NumberFormatter();
        }
        else if('string' === $type) {
            return new StringFormatter();
        }
        else{
            throw new \InvalidArgumentException();
        }
    }
}