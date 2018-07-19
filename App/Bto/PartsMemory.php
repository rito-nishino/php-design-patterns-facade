<?php

namespace App\Bto;


class PartsMemory
{
    private $items;

    public function __construct()
    {
        $this->items = [
            1 => new Item(1, '4MB', 10000),
            2 => new Item(2, '8MB', 20000),
            3 => new Item(3, '16MB', 30000)
        ];
    }
    public function getItem($id)
    {
        return $this->items[$id];
    }
}