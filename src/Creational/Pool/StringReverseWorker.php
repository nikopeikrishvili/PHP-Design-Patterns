<?php

namespace DesignPatterns\Creational\Pool;

class StringReverseWorker
{
    public function __construct()
    {
    }

    /**
     * @param string $str
     * @return string
     */
    public function run(string $str): string
    {
        return strrev($str);
    }
}