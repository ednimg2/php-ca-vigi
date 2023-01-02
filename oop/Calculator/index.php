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

$square = new Calculator(new Square(3));
$rectangle = new Calculator(new Rectangle(3, 4));
$circle = new Calculator(new Circle(3));
$triangle = new Calculator(new Triangle(3, 3));

var_dump($square->calculateArea());
var_dump($rectangle->calculateArea());
var_dump($circle->calculateArea());
var_dump($triangle->calculateArea());