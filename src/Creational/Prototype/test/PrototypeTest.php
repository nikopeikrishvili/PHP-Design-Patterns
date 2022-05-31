<?php

namespace DesignPatterns\Creational\Prototype\test;

use DesignPatterns\Creational\Prototype\BarPrototype;
use DesignPatterns\Creational\Prototype\FooPrototype;

class PrototypeTest extends \PHPUnit\Framework\TestCase
{
    public function testCanGetFooBook()
    {
        $fooBook = new FooPrototype();
        for ($i=0;$i<5; $i++)
        {
            $book = clone $fooBook;
            $book->setTitle('Title : '.$i);
            $this->assertInstanceOf(FooPrototype::class, $book);
        }
    }
    public function testCanGetBarBook()
    {
        $barBook = new BarPrototype();
        for ($i=0;$i<5; $i++)
        {
            $book = clone $barBook;
            $book->setTitle('Title : '.$i);
            $this->assertInstanceOf(BarPrototype::class, $book);
        }
    }
}