<?php

use App\Model\Circle;
use App\Model\Square;
use App\Service\Circle as ServiceCircle;
use App\Service\Logger;

function load_model($class_name)
{
    $class_name = str_replace('App\\', '', $class_name);
    $pathToClassFile = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';

    if (file_exists($pathToClassFile)) {
        require  $pathToClassFile;
    }
}

spl_autoload_register('load_model');

$circle = new Circle();
$square = new Square();

$circle2 = new ServiceCircle();
$logger = new Logger();

/**
 *
 * Susikurti faila index.php
 * Susikurti dir'a Model
 * Model dir'e susikurti class'e User, priskirti namespace pvz.: App\Model
 * index.php panaudoti class'e User
 *  - reik requirinti class'e
 *  - panaudoti use, class'es uzloadinimui
 *
 * Parasyti klasiu autoloading'a
 */