<?php

namespace DesignPatterns\Structural\Adapter;

interface BookInterface
{
    public function getPage(): int;
    public function open():void;
    public function turnPage();
}