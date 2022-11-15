<?php

$cities = [
    [
        'name' => 'Tokyo',
        'population' => 37435191,
    ],
    [
        'name' => 'Delhi',
        'population' => 29399141,
    ],
    [
        'name' => 'Shanghai',
        'population' => 26317104,
    ],
    [
        'name' => 'Sao Paulo',
        'population' => 21846507,
    ],
    [
        'name' => 'Mexico City',
        'population' => 21671908,
    ],
    [
        'name' => 'New York',
        'population' => 25000000,
    ],
];

$jsonEncoded = json_encode($cities);

$jsonDecoded = json_decode($jsonEncoded, true);

var_dump($jsonDecoded);
//echo $jsonEncoded;
//echo $jsonDecoded;
//echo $cities;