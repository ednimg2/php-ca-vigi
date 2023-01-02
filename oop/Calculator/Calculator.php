<?php

namespace App\Calculator;

use App\Calculator\Shape\ShapeInterface;

class Calculator
{
    private ShapeInterface $shape;

    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    public function calculateArea(): float
    {
        return round($this->shape->area(), 2);
    }

    public function calculatePerimeter(): float
    {
        return round($this->shape->perimeter(), 2);
    }
}