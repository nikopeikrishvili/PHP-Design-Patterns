<?php

namespace DesignPatterns\Structural\Adapter;

class EbookAdapter implements BookInterface
{

    public function __construct(private readonly EbookInterface $ebook)
    {
    }

    public function getPage(): int
    {
        return $this->ebook->getPage()[0];
    }

    public function open(): void
    {
        $this->ebook->unlock();
    }

    public function turnPage()
    {
       $this->ebook->pressNext();
    }
}