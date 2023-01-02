<?php

namespace App\AreaCalculator\Shape;

require_once 'Shape/ShapeInterface.php';

class Square implements ShapeInterface
{
    private float $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    public function area(): float
    {
        return $this->width ** 2;
    }
}