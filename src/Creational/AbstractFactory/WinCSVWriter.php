<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinCSVWriter implements CSVWriterInterface
{

    public function write(array $line): string
    {
        return join(',', $line) . "\r\n";
    }
}