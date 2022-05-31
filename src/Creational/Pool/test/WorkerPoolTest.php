<?php

namespace DesignPatterns\Creational\Pool\test;

use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class WorkerPoolTest extends TestCase
{
    public function testCanGetInstanceWithGet()
    {
        $workerPool = new WorkerPool();
        $w1 = $workerPool->get();
        $w2 = $workerPool->get();
        $this->assertCount(2, $workerPool);
        $this->assertNotSame($w1, $w2);
    }

    public function testDisposeWillReturnOldObject()
    {
        $workerPool = new WorkerPool();
        $w1 = $workerPool->get();
        $workerPool->dispose($w1);
        $w2 = $workerPool->get();
        $this->assertCount(1, $workerPool);
        $this->assertSame($w1, $w2);
    }
}