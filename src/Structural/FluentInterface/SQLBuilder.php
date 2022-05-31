<?php

namespace DesignPatterns\Structural\FluentInterface;

use Stringable;

class SQLBuilder implements Stringable, SQLBuilderInterface
{
    private array $columns = [];
    private array $tables = [];
    private array $conditions = [];

    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->columns),
            join(', ', $this->tables),
            join(' AND ', $this->conditions)
        );
    }

    public function select(array $columns): SQLBuilderInterface
    {
        $this->columns = $columns;
        return $this;
    }

    public function from(string $tableName, string $alias = ''): SQLBuilderInterface
    {
        if(!empty($alias)){
            $this->tables[] = $tableName.' AS '.$alias;
        }
        else{
            $this->tables[] = $tableName;
        }
        return $this;
    }

    public function where(string $condition): SQLBuilderInterface
    {
        $this->conditions[] = $condition;
        return $this;
    }
}