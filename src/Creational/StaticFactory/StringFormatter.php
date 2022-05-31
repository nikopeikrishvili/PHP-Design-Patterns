<?php

namespace DesignPatterns\Creational\StaticFactory;

class StringFormatter implements Formatter
{

    public function format(string $input): string
    {
        return $input;
    }
}