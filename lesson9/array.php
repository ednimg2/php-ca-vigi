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

$sum = array_reduce(
    $cities,
    function (?int $count, array $city): int {
        $count = $count + $city['population'];
        return $count;
    }
);

function sum (?int $count, array $city) {

}



sum(1, []);

var_dump($sum);