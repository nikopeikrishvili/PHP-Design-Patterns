<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface WriterFactoryInterface
{
    public function createJsonWriter(): JsonWriterInterface;

    public function createCSVWriter(): CSVWriterInterface;
}