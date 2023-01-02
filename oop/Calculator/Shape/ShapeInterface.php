<?php

namespace App\Calculator\Shape;

interface ShapeInterface
{
    public function area(): float;

    public function perimeter(): float;
}