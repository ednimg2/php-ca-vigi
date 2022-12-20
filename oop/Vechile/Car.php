<?php

namespace App\Vechile;

require 'Vechile.php';

class Car extends Vechile
{
    public string $manufacturer;
    public string $color;

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}