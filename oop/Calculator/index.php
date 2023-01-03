<?php

require 'Calculator.php';

function load_model($class_name)
{
    $class_name = str_replace('App\Calculator\\', '', $class_name);
    $pathToClassFile = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';

    if (file_exists($pathToClassFile)) {
        require  $pathToClassFile;
    }
}

spl_autoload_register('load_model');

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

var_dump($square->calculatePerimeter());