<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;


abstract class BookPrototype
{
    private string $title;
    private string $category;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    abstract public function __clone();
}