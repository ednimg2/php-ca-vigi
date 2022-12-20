<?php

namespace App\AreaCalculator\Shape;

require_once 'Shape/ShapeInterface.php';

class Rectangle implements ShapeInterface
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}