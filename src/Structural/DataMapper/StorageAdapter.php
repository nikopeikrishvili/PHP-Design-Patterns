<?php

namespace DesignPatterns\Structural\DataMapper;

class StorageAdapter
{
    public function __construct(private readonly array $data)
    {
    }

    public function findById(int $id)
    {
        if(isset($this->data[$id]))
        {
            return $this->data[$id];
        }
        return null;
    }
}