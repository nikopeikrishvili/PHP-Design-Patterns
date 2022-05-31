<?php

namespace DesignPatterns\Structural\DependencyInjection;

class DataBaseConfiguration
{
    private string $host;
    private int $port;
    private string $username;
    private string $password;

    /**
     * @param string $host
     * @param int $port
     * @param string $username
     * @param string $password
     */
    public function __construct(string $host, int $port, string $username, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}