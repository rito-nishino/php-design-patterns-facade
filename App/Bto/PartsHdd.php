<?php

namespace App\Bto;


class PartsHdd
{
    private $items;

    public function __construct()
    {
        $this->items = [
            1 => new Item(1, 'SSD 128GB', 10000),
            2 => new Item(2, 'SSD 256GB', 20000),
            3 => new Item(3, 'SSD 500GB', 30000)
        ];
    }
    public function getItem($id)
    {
        return $this->items[$id];
    }
}