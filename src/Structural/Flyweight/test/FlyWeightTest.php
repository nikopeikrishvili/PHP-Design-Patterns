<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight\test;

use DesignPatterns\Structural\Flyweight\TextFactory;
use PHPUnit\Framework\TestCase;

class FlyWeightTest extends TestCase
{
    private array $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    private array $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyWeight()
    {
        $factory = new TextFactory();
        foreach ($this->characters as $character){
            foreach ($this->fonts as $font){
                $text = $factory->get($character);
                $rendered = $text->render($font);
                $this->assertSame('Character '.$character.' with font '.$font, $rendered);
            }
        }

        foreach ($this->fonts as $word){
            $text = $factory->get($word);
            $rendered = $text->render('foobar');
            $this->assertSame('Word '.$word.' with font foobar', $rendered);
        }
    }
}