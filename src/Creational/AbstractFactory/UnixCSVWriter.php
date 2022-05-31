<?php

namespace DesignPatterns\Creational\AbstractFactory;

class UnixCSVWriter implements CSVWriterInterface
{

    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }
}