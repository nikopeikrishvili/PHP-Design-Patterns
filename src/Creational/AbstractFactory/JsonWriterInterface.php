<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface JsonWriterInterface
{
    public function write($data, $formatted): string;
}