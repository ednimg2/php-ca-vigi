```php
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
```

1. Create an interface `CartItem` that should be implemented by the `Item` class.
2. Create an interface `ShoppingCartInterface` that should be implemented by the `ShoppingCart` class.
3. Refactor the `ShoppingCart` class to use the `CartItem` interface instead of the `Item` class.
4. Refactor the `Item` class to implement the `CartItem` interface.
5. Create a `Discount` class that should have a method `apply($items)`
6. Add the `apply` method to the `ShoppingCart` class and use the new `Discount` class
7. Extract the calculation of total to a new class `Calculator` and use that class in the `ShoppingCart` class
8. Use dependency injection to instantiate the classes that `ShoppingCart` needs
9. This exercise will help you practice the SOLID principles, specifically the Open/Closed Principle. By creating an interface for the Item and `ShoppingCart` classes and refactoring the code to use these interfaces instead of the concrete classes, you will make the code more flexible and easier to extend. By creating a new class for discounts and extraction of the calculation of total to a separate class, you will also make the code more maintainable and testable.