<?php

require 'Shape/Square.php';
require 'Shape/Rectangle.php';
require 'Shape/Circle.php';
require 'Shape/Triangle.php';
require 'Calculator.php';

use App\Calculator\Calculator;
use App\Calculator\Shape\Circle;
use App\Calculator\Shape\Rectangle;
use App\Calculator\Shape\Square;
use App\Calculator\Shape\Triangle;

$squareArea = new Calculator(new Square(3));
$rectangleArea = new Calculator(new Rectangle(3, 4));
$circleArea = new Calculator(new Circle(3));
$triangleArea = new Calculator(new Triangle(3, 3));

var_dump($squareArea->calculateArea());
var_dump($rectangleArea->calculateArea());
var_dump($circleArea->calculateArea());
var_dump($triangleArea->calculateArea());