<?php

namespace DesignPatterns\Creational\StaticFactory;

class NumberFormatter implements Formatter
{

    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}