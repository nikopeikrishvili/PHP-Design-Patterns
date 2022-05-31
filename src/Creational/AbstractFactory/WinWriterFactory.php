<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinWriterFactory implements WriterFactoryInterface
{

    public function createJsonWriter():JsonWriterInterface
    {
        return new WinJsonWriter();
    }

    public function createCSVWriter():CSVWriterInterface
    {
        return new WinCSVWriter();
    }
}