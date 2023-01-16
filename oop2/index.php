<?php

interface CartItem
{

}

interface ShoppingCartInterface
{
    public function addItem(CartItem $item);
    public function removeItem(CartItem $item);
}

class ShoppingCart implements ShoppingCartInterface
{
    protected array $items = [];

    public function addItem(CartItem $item)
    {
        $this->items[] = $item;
    }

    public function removeItem(CartItem $item)
    {
        if (($key = array_search($item, $this->items)) !== false) {
            unset($this->items[$key]);
        }
    }

    public function getTotal(): float
    {
        return (new CartCalculator($this->items))->getTotal();
    }

    public function apply(): self
    {
        $this->items = (new Discount())->apply($this->items);

        return $this;
    }
}

class Item implements CartItem
{
    public string $name;
    public float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class Discount
{
    const DISCOUNT = 10;

    public function apply(array $items)
    {
        foreach ($items as $item) {
            $item->price = $item->price - self::DISCOUNT;
        }

        return $items;
    }
}

class CartCalculator
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->price;
        }

        return $total;
    }
}

$cart = new ShoppingCart();
$cart->addItem(new Item('iPhone', 699));
$cart->addItem(new Item('Samsung', 499));
$cart->addItem(new Item('Dell macbook', 1299));

//var_dump($cart);

$cart->apply();

var_dump($cart);

echo $cart->getTotal();

//var_dump($cart);