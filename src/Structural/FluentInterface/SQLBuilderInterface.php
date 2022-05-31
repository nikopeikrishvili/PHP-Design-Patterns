<?php

namespace DesignPatterns\Structural\FluentInterface;

interface SQLBuilderInterface
{
    public function select(array $columns): self;
    public function from(string $tableName, string $alias = ''): self;
    public function where(string $condition): self;
}