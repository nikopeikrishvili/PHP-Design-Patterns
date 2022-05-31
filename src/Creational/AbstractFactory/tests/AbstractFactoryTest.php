<?php
declare(strict_types=1);
namespace DesignPatterns\Tests;


use DesignPatterns\Creational\AbstractFactory\CSVWriterInterface;
use DesignPatterns\Creational\AbstractFactory\JsonWriterInterface;
use DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WinWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WriterFactoryInterface;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return  [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }


    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactoryInterface $writerFactory)
    {
        $this->assertInstanceOf(JsonWriterInterface::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CSVWriterInterface::class, $writerFactory->createCsvWriter());
    }
}