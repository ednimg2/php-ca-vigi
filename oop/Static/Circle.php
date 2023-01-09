<?php

class Circle
{
    const PI = 3.14;
    public static string $name = 'circle';
}

echo Circle::PI;


class Shipping
{
    public static string $type = '';
    public static function getShippingType()
    {
        return static::$type;
    }
}

class DpdShipping extends Shipping
{
    public static string $type = 'DPD';
}

class VenipakShipping extends Shipping
{
    public static string $type = 'VENIPAK';
}

echo VenipakShipping::getShippingType();