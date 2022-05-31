<?php

namespace DesignPatterns\Structural\Bridge\test;

use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PingService;
use DesignPatterns\Structural\Bridge\TextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingPlainTextFormatter()
    {
        $pingService = new PingService(new TextFormatter());
        $this->assertSame('Pong',$pingService->get());
    }
    public function testCanPrintUsingHtmlFormatter()
    {
        $pingService = new PingService(new HtmlFormatter());
        $this->assertSame('<p>Pong</p>',$pingService->get());
    }
}