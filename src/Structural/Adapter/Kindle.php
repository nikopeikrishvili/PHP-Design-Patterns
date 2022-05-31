<?php

namespace DesignPatterns\Structural\Adapter;

class Kindle implements EbookInterface
{
    private int $currentPage = 1;
    private int $totalPages = 100;
    public function unlock(): void
    {

    }

    public function pressNext(): void
    {
        $this->currentPage++;
    }

    public function getPage(): array
    {
        return [$this->currentPage, $this->totalPages];
    }
}