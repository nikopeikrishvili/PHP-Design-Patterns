<?php

namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements FormatterInterface
{

    public function format(string $text): string
    {
        return '<p>'.$text.'</p>';
    }
}