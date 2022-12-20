<?php

class Car
{
    private string $manufacturer;
    public function __construct(string $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        echo 'Construct initialized';
    }

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function __destruct()
    {
        echo 'Destruct class';
    }
}