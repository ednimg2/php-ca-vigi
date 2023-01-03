<?php

namespace App\Calculator\Shape;

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

    public function perimeter(): float
    {
        return 4 * $this->width;
    }
}