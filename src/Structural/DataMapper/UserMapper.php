<?php

namespace DesignPatterns\Structural\DataMapper;

class UserMapper
{
    public function __construct(private readonly StorageAdapter $adapter)
    {
    }

    public function getById(int $id)
    {
        $data = $this->adapter->findById($id);
        if($data === null)
        {
            throw new \InvalidArgumentException("User #$id was not found");
        }
        return $this->mapToUser($data);
    }

    private function mapToUser(array $data): User
    {
        return User::createFromState($data);
    }
}