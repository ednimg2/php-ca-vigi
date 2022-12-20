<?php

require_once 'Car.php';

use App\Vechile\Car;

$car = new Car();
$car->vechileType = 'car';
$car->manufacturer = 'BMW';
$car->color = 'red';

var_dump($car);