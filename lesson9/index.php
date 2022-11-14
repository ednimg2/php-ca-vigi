<?php

/*$a = 10;

var_dump($a);
var_dump($GLOBALS['a']);

$a = 15;

function sum()
{
    return $GLOBALS['a'];
}

var_dump(sum());
var_dump($GLOBALS);*/

/*foreach ($_SERVER as $key => $item) {
    echo sprintf('%s - %s', $key, $item) . PHP_EOL;
}*/

/*var_dump($_GET);

var_dump($_GET['a']);
var_dump($_GET['b']);*/

/*function sum(float $a, float $b): float
{
    return $a + $b;
}

$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

echo sum($a, $b);*/

if (isset($_GET['page']) && $_GET['page'] === 'about') {
    echo 'Puslapis apie mus';
} else {
    echo 'Pradinis puslapis';
}