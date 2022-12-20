<?php

namespace App\AreaCalculator;

use App\AreaCalculator\Shape\ShapeInterface;

class AreaCalculator
{
    private ShapeInterface $shape;

    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    public function calculate(): float
    {
        return round($this->shape->area(), 2);
    }
}