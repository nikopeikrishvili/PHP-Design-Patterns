<?php

namespace DesignPatterns\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactoryInterface
{

    public function createJsonWriter():JsonWriterInterface
    {
        return new UnixJsonWriter();
    }

    public function createCSVWriter(): CSVWriterInterface
    {
        return new UnixCSVWriter();
    }
}