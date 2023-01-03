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
 * Sukurti class'e AreaCalculator
 * Methods:
 * + calculate()
 *
 * method'as calculate() turi iskviesti Rectangle arba Square class'iu method'a calculateArea()
 *
 * Kodo vykdymas:
 *
 * $areaCalculator = new AreaCalculator();
 * $areaCalculator->calculate(new Rectangle(3, 4));
 *
 * Sukurkite interface'a AreaCalculatorInterface
 * Methods:
 * + calculateArea()
 *
 * Sutvarkykite classe's Rectangle ir Square, kad naudotu interface'a AreaCalculatorInterface
 *
 * Kodo vykdymas:
 *
 * $areaCalculator = new AreaCalculator();
 * $areaCalculator->calculate(new Rectangle(3, 4));
 */