<?php

namespace App\AreaCalculator\Shape;

require_once 'Shape/ShapeInterface.php';

class Circle implements ShapeInterface
{
    private const PI = 3.1415926535898;
    private float $length;

    public function __construct(float $length)
    {
        $this->length = $length;
    }

    public function area(): float
    {
        return self::PI * pow($this->length, 2);
    }
}