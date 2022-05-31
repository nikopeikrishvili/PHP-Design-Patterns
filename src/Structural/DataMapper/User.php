<?php

namespace DesignPatterns\Structural\DataMapper;

class User
{
    public function __construct(private readonly string $userName, private readonly string $email)
    {
    }
    public static function createFromState(array $data): User
    {
        return new self($data['user_name'], $data['email']);
    }
    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

}