<?php

namespace DesignPatterns\Structural\Adapter;

interface EbookInterface
{
    public function unlock(): void;
    public function pressNext(): void;
    public function getPage(): array;
}