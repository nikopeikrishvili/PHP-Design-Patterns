<?php

namespace DesignPatterns\Structural\Adapter;

class PaperBook implements BookInterface
{
    public int $currentPage = 0;
    public function getPage(): int
    {
        return $this->currentPage;
    }

    public function open(): void
    {
        $this->currentPage = 1;
    }

    public function turnPage()
    {
        $this->currentPage++;
    }
}