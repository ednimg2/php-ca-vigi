<?php

namespace App\Calculator\Shape;

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

    public function perimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }
}