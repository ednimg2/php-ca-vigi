<?php

function load_model($class_name)
{
    $class_name = str_replace('App\\', '', $class_name);
    $pathToClassFile = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';

    if (file_exists($pathToClassFile)) {
        require  $pathToClassFile;
    }
}

spl_autoload_register('load_model');

$circle = new \App\Model\Circle();
$square = new \App\Model\Square();

$circle2 = new App\Service\Circle();