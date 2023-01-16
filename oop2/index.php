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
    private Discount $discount;

    public function __construct()
    {
        $this->discount = new Discount();
    }

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

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        return (new CartCalculator($this->items))->getTotal();
    }

    public function apply(): self
    {
        $this->items = $this->discount->apply($this->items);

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

echo $cart->getTotal() . PHP_EOL;
$cart->apply();
echo $cart->getTotal() . PHP_EOL;

//var_dump($cart);

$calculator = new CartCalculator($cart->getItems());
echo $calculator->getTotal();