<?php

class ShoppingCart
{
    protected $items = [];

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function removeItem($item)
    {
        if (($key = array_search($item, $this->items)) !== false) {
            unset($this->items[$key]);
        }
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->price;
        }

        return $total;
    }
}

class Item
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}