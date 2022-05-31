<?php

namespace DesignPatterns\Structural\Decorator\test;

use DesignPatterns\Structural\Decorator\DoubleBedBooking;
use DesignPatterns\Structural\Decorator\ExtraBed;
use DesignPatterns\Structural\Decorator\Wifi;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleBooking()
    {
        $booking = new DoubleBedBooking();
        $this->assertEquals(40, $booking->getTotalPrice());
        $this->assertSame('Double bed room', $booking->getDescription());
    }

    public function testAddedWifi()
    {
        $booking = new DoubleBedBooking();
        $wifi = new Wifi($booking);
        $this->assertEquals(42, $wifi->getTotalPrice());
        $this->assertSame('Double bed room; with wifi', $wifi->getDescription());
    }

    public function testAddedWifiAndExtraBed()
    {
        $booking = new DoubleBedBooking();
        $wifi = new Wifi($booking);
        $extraBed = new ExtraBed($wifi);
        $this->assertEquals(62, $extraBed->getTotalPrice());
        $this->assertSame('Double bed room; with wifi; with extra bed', $extraBed->getDescription());
    }
}