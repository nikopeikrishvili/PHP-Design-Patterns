<?php
require __DIR__ . '/../../vendor/autoload.php';

$windowsWriterFactory = new \DesignPatterns\Creational\AbstractFactory\WinWriterFactory();
$unixWriterFactory = new \DesignPatterns\Creational\AbstractFactory\UnixWriterFactory();

$csvWriter = $windowsWriterFactory->createCSVWriter();
$csvWriterUnix = $unixWriterFactory->createCSVWriter();

var_dump($csvWriter->write(["A", "V"]));
var_dump($csvWriterUnix->write(["A", "V"]));