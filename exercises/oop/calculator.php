<?php

/**
 * Sukurti Calculator class'e, kuri moketu:
 * Properties:
 * - numberA
 * - numberB
 * Methods:
 * + sum() //sudeti
 * + subtract() //atimti
 * + multiply() // sudauginti
 * + divide() // dalinti
 *
 * Kodo vykdymas.
 *
 * $calculator = new Calculator(6, 3);
 *
 * $calculator->sum(); // 9
 * $calculator->subtract(); // 3
 * $calculator->multiply(); // 18
 * $calculator->divide(); // 2
 *
 * Pakeiskite koda taip, kad numberA ir numberB reiktu uzsetinti per setter'ius
 *
 * Kodo vykdymas.
 *
 * $calculator = new Calculator();
 * $calculator->setNumberA(6);
 * $calculator->setNumberB(3);
 *
 * $calculator->sum(); // 9
 */

/**
 * Uzduotis Nr. 2
 * Sukurti class'e Rectangle
 * Methods:
 * + calculateArea(int $a, int $b);
 *
 * Kodo vykdymas:
 *
 * $rectangle = new Rectangle();
 * $rectangle->calculateArea(3, 4); // 12
 *
 * Sukurti class'e Square
 * Methods:
 * + calculateArea(int $a);
 *
 * $square = new Square();
 * $square->calculateArea(3); // 9
 *
 * Sutvarkyti koda taip, kad Rectangle ir Square objektu argumentus galetume perduoti per konstruktoriu ir uznaudoti juos method'e
 *
 * Kodo vykdymas:
 *
 * $rectangle = new Rectangle(3, 4);
 * $rectangle->calculateArea(); // 12
 *
 * $square = new Square(3);
 * $square->calculateArea(); // 9
 *
 * Sukurti class'e Calculator
 * Methods:
 * + calculateArea()
 *
 * method'as calculate() turi iskviesti Rectangle arba Square class'iu method'a calculateArea()
 *
 * Kodo vykdymas:
 *
 * $calculator = new Calculator();
 * $calculator->calculateArea(new Rectangle(3, 4));
 *
 * Susikurti nauja class'e Circle
 * Methods:
 * + calculateArea()
 * + calculateRadius()
 *
 * Kodo vykdymas:
 *
 * $calculator = new Calculator();
 * $calculator->calculateArea(new Circle(3));
 * $calculator->calculateRadius(new Circle(3));
 *
 */

interface AreaInterface
{
    public function calculateArea();
}

interface DiameterInterface
{
    public function calculateDiameter();
}


class Rectangle implements AreaInterface
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(): int
    {
        return $this->width * $this->height;
    }
}

class Circle implements AreaInterface, DiameterInterface
{
    public function calculateArea()
    {
        // TODO: Implement calculateArea() method.
    }

    public function calculateDiameter()
    {
        // TODO: Implement calculateRadius() method.
    }
}

class Calculator
{
    public function calculateArea(AreaInterface $shape): int
    {
        return $shape->calculateArea();
    }

    public function calculateDiameter(DiameterInterface $shape): float
    {
        return $shape->calculateDiameter();
    }
}

$calculator = new Calculator();
var_dump($calculator);
echo $calculator->calculateArea(new Rectangle(3, 4)) . PHP_EOL;
echo $calculator->calculateDiameter(new Rectangle(3, 4));