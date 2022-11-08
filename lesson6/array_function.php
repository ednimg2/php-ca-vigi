<?php

/*$products = [
    'product_1' => 'shirt',
    'product_2' => 'trousers',
    'product_98' => 'coat',
];

//$products = null;

if (is_array($products)) {
    foreach ($products as $product) {
        echo $product . PHP_EOL;
    }
}

var_dump(is_array($products));*/

/*$products = [
    'product 1',
    'product 2',
    'product 3',
    'product 4',
    'product 5',
];

unset($products[3]);

//var_dump(count($products));

$products = '444';

if (is_array($products)) {
    if (count($products) > 0) {
        echo 'Taip';
    }
}

if (is_array($products) && count($products) > 0) {
    echo 'Taip';
}*/

/*$products = [
    'product 1',
    'product 2',
    'product 3',
    'product 4',
    'product 5',
    3,
    5,
];

var_dump(array_search('5', $products, true));*/

/*$products = [
    'product 1',
    'product 2',
    'product 3',
    'product 4',
    'product 5',
    3,
    5,
];

var_dump(in_array('5', $products, true));*/

/*$products = [
    'product 1',
    'product 2',
    'product 3',
    'product 4',
    'product 5',
];

//var_dump(array_rand($products, 3));

//echo $products[array_rand($products)];

foreach (array_rand($products, 3) as $productKey) {
    echo $products[$productKey] . PHP_EOL;
}*/

/*$products = [
    'product_1' => 'table',
    'product_2' => 'chair',
    'product_3' => 'iPhone',
    'product_4' => 'tv',
    'product_5' => 'sofa',
];

//var_dump($products);
//var_dump(array_values($products));

//var_dump(array_keys($products));*/

/*$words = [
    'labas',
    'hello',
    'ate'
];

// labas-hello-ate

$text = null;

foreach ($words as $word) {
    $text .= $word;
    if (end($words) !== $word) {
        $text .= '-';
    }
}

echo $text . PHP_EOL;

var_dump(implode('+', $words));*/

/*$text = 'hello-ate-labas-ipsum-lorem';

var_dump(explode('-', $text));
var_dump(explode('-', $text, 3));
var_dump(explode('-', $text, 0));
var_dump(explode('-', $text, -2));

$uri = 'bmw/5_series/apsvietimo-sistema/priekiniai-zibintai/priekinis-zibintas';
var_dump(explode('/', $uri, 3));*/


/*$products = [
    'product 1',
    'product 2',
    'product 3',
    'product 4',
    'product 3',
    'product 4',
    'product 5',
    'product 5',
];

var_dump(array_unique($products));*/

//$uri = 'bmw/5_series/apsvietimo-sistema/priekiniai-zibintai/priekinis-zibintas';

//$explodedUri = explode('/', $uri);

//var_dump($explodedUri);

//var_dump(preg_split('/[\/,\-]+/', $uri));

/*$array1 = [
    'orange',
    'apple',
    'peach',
    'strawberry',
];

$array2 = [
    'strawberry',
    'pear',
];

$array3 = [
    'orange',
    'pear',
];

var_dump(array_diff($array1, $array2));
var_dump(array_diff($array1, $array2, $array3));*/

/*$array1 = [
    'orange',
    'apple',
    'peach',
    'strawberry',
];

$array2 = [
    'strawberry',
    'pear',
    'peach',
];

var_dump(array_intersect($array1, $array2));*/

/*$array1 = [
    'orange',
    'apple',
    'peach',
    'strawberry',
];

$array2 = [
    'strawberry',
    'pear',
    'peach',
];

var_dump(array_merge($array1, $array2));*/

$beers = [
    [
        'name' => 'Svyturys',
        'price' => 1.23
    ],
    [
        'name' => 'Carlsberg',
        'price' => 1.40
    ],
    [
        'name' => 'Utena',
        'price' => 1.01
    ]
];

/*foreach ($beers as $key => $beer) {
    $beers[$key]['discount'] = 0;
}*/

/*$modifiedProducts = array_map(
    'modifyProduct',
    $beers
);

function modifyProduct(array $beer): array
{
    $beer['discount'] = 0;

    return $beer;
}*/

/*$modifiedProducts = array_map(
    function (array $beer): array {
        $beer['discount'] = 0;

        if ($beer['price'] > 1.20) {
            $beer['discount'] = 20;
        }

        return $beer;
    },
    $beers
);

var_dump($modifiedProducts);*/

$array = [
    99,
    15,
    28,
    13,
    145,
    99,
    12,
    -57,
    -36,
];

/*$arraySum = array_reduce(
    $array,
    function (?int $sum, int $item): int {
        return $sum + $item;
    }
);

var_dump($arraySum);*/

/*$evenNumbers = array_filter(
    $array,
    function (int $number): bool {
        if (!($number % 2)) {
            return true;
        }

        return false;
    }
);

var_dump($evenNumbers);*/

/*$evenNumbers = array_filter(
    $array,
    function (int $number): bool {
        if (!($number % 2)) {
            return true;
        }

        return false;
    }
);

$evenNumbersSum = array_reduce(
    array_filter(
        $array,
        function (int $number): bool {
            if (!($number % 2)) {
                return true;
            }

            return false;
        }
    ),
    function (?int $sum, int $item): int {
        return $sum + $item;
    }
);*/

/*function evenNumbersSum(array $numbers): int
{
    return array_reduce(
        array_filter(
            $numbers,
            function (int $number): bool {
                if (!($number % 2)) {
                    return true;
                }

                return false;
            }
        ),
        function (?int $sum, int $item): int {
            return $sum + $item;
        }
    );
}

var_dump(evenNumbersSum($array));*/

/*$city = 'Vilnius';
$event = 'PHP conference';

var_dump(compact('city', 'event'));

$array = [
    'BMW',
    'Beer',
    'iPhone'
];

list($manufacturer, $drink) = $array;

var_dump($manufacturer, $drink);*/

/*var_dump($array);

asort($array);

var_dump($array);

arsort($array);

var_dump($array);*/

//var_dump(range(1, 30));

function getCities(): array
{
    return [
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
}

/*var_dump(array_column(getCities(), 'population'));

var_dump(array_sum(array_column(getCities(), 'population')));*/

/*function exercise2(array $cities): int
{
    return array_sum(array_column($cities, 'population'));
}

echo exercise2(getCities());*/

function exercise1(array $cities): ?int
{
//
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
//    Miestus pasiimkite iškvietę funkciją 'getCities'
//

    $populationSum = 0;

    foreach ($cities as $city) {
        $populationSum += $city['population'];
    }

    return $populationSum;
}

echo exercise1(getCities());
