<?php

//require 'Vechile\Car.php';
require 'Shape/Square.php';
require 'Shape/Rectangle.php';
require 'Shape/Circle.php';
require 'Shape/Triangle.php';
require 'AreaCalculator.php';

use App\AreaCalculator\AreaCalculator;
use App\AreaCalculator\Shape\Circle;
use App\AreaCalculator\Shape\Rectangle;
use App\AreaCalculator\Shape\Square;
use App\AreaCalculator\Shape\Triangle;

$squareArea = new AreaCalculator(new Square(3));
$rectangleArea = new AreaCalculator(new Rectangle(3, 4));
$circleArea = new AreaCalculator(new Circle(3));
$triangleArea = new AreaCalculator(new Triangle(3, 3));

var_dump($squareArea->calculate());
var_dump($rectangleArea->calculate());
var_dump($circleArea->calculate());
var_dump($triangleArea->calculate());