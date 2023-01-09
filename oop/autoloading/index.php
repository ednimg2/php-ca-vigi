<?php

function load_model($class_name)
{
    $pathToClassFile = 'Model/' . $class_name . '.php';

    if (file_exists($pathToClassFile)) {
        require  $pathToClassFile;
    }
}

function load_class($class_name)
{
    $pathToClassFile = 'Class/' . $class_name . '.php';

    if (file_exists($pathToClassFile)) {
        require  $pathToClassFile;
    }
}

spl_autoload_register('load_model');
spl_autoload_register('load_class');

//$circle = new Circle();
$square = new Square();