<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;


use Countable;

class TextFactory implements Countable
{
    private array $charPool = [];

    public function get(string $name): TextInterface
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }
        return $this->charPool[$name];
    }

    public function create(string $name): TextInterface
    {
        if (strlen($name) === 1) {
            return new Char($name);
        } else {
            return new Word($name);
        }
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->charPool);
    }
}