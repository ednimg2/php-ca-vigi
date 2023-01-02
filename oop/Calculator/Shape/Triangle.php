<?php

namespace App\Calculator\Shape;

require_once 'ShapeInterface.php';
class Triangle implements ShapeInterface
{
    private const BASE_TRIANGLE = 0.5;
    private float $length;
    private float $height;

    public function __construct(float $length, float $height)
    {
        $this->length = $length;
        $this->height = $height;
    }

    public function area(): float
    {
        return self::BASE_TRIANGLE * $this->length * $this->height;
    }

    public function perimeter(): float
    {
        return 0;
    }
}