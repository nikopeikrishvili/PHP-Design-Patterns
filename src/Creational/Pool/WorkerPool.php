<?php

namespace DesignPatterns\Creational\Pool;

use Countable;

class WorkerPool implements Countable
{
    private array $freeWorkers = [];
    private array $occupiedWorkers = [];


    public function get(): StringReverseWorker
    {
        if(count($this->freeWorkers) === 0)
        {
            $worker = new StringReverseWorker();
        }
        else{
            $worker = array_pop($this->freeWorkers);
        }
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    public function dispose(StringReverseWorker $worker): void
    {
        $key = spl_object_hash($worker);
        if(key_exists($key, $this->occupiedWorkers)){
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->freeWorkers) + count($this->occupiedWorkers);
    }
}