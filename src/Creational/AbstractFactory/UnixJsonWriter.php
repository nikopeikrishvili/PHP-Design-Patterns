<?php

namespace DesignPatterns\Creational\AbstractFactory;

class UnixJsonWriter implements JsonWriterInterface
{

    public function write($data, $formatted): string
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }
}