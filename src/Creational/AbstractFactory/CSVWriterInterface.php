<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface CSVWriterInterface
{
    public function write(array $line): string;
}