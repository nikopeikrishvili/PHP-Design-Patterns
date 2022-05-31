<?php

namespace DesignPatterns\Structural\Composite;

class ButtonElement implements RenderableInterface
{

    public function render(): string
    {
        return '<button type="submit">Submit</button>';
    }
}