<?php

namespace DesignPatterns\Structural\Bridge;

class TextFormatter implements FormatterInterface
{

    public function format(string $text): string
    {
        return $text;
    }
}