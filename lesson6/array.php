<?php

/*$products = [];
$products[] = 'Table';
$products[] = 'Sofa';

$books = [
    'knyga 1',
    'knyga 2',
    'knyga 3'
];

$books[] = 'Knyga 4';

var_dump($products);
var_dump($books);*/

/*$products = [];
$products['product1'] = 'iPhone 12';
$products['product2'] = 'iPad';
$products['book1'] = 'Knyga 1';
//$products[55] = 'Table';
$products[] = 'Desk';

var_dump($products);*/


/*$books1 = [];
$books1['knyg1'] = 'knyga 1';
$books1['knyg2'] = 'knyga 2';
$books1['knyg3'] = 'knyga 3';

$books2 = [
    'knyg1' => 'knyga 1',
    'knyg2' => 'knyga 2',
    'knyg3' => 'knyga 3'
];

//$books[] = 'knyga 4';

var_dump($books1 === $books2);*/

/*$beerTypes = [
    'sviesus',
    'tamsus'
];

$drinks = [
    'Alus' => $beerTypes,
    'Limonadas',
    'Pienas'
];

$snacks = [
    'Pizza',
    'Kebab'
];

$saldytuvas = [];
$saldytuvas['gerimai'] = $drinks;
$saldytuvas['uzkandziai'] = $snacks;

var_dump($saldytuvas);*/

/*$products = [
    'iPhone',
    'iPad'
];

$books = [
    'book 1',
    'book 2'
];

$bag = [
    'products' => $products,
    'books' => $books
];

//var_dump($bag['books']);

$bag2 = [
    'products' => [
        'iPhone',
        'iPad'
    ],
    'books' => [
        'book 1',
        'book 2'
    ]
];

var_dump($bag === $bag2);*/

/*$beers = [
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

//var_dump($beers);
//var_dump($beers[0]);

foreach ($beers as $key => $beer) {
    //if ($key != 2) {
        echo $key . ' - ' . $beer['name'] . ' : ' . $beer['price'] . PHP_EOL;
        $beers[$key]['discount'] = 40;
    //}
}

var_dump($beers);*/

/*$products = [
    'iPhone',
    'iPad'
];

unset($products[0]);

var_dump($products);*/

/*$books2 = [
    'knyg1' => 'knyga 1',
    'knyg2' => 'knyga 2',
    'knyg3' => 'knyga 3'
];

unset($books2['knyg2']);

var_dump($books2);*/

/*$bag2 = [
    'products' => [
        'iPhone',
        'iPad'
    ],
    'books' => [
        'book 1',
        'book 2'
    ]
];

unset($bag2['products'][1]);

var_dump($bag2);*/

/*$beers = [
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

//unset($beers[1]['price']);

foreach ($beers as $key => $beer) {
    unset($beers[$key]['price']);
}

var_dump($beers);*/

/*function exercise1(): int
{
    $numbers = [0, 1, 2, 3, 4];

    foreach ($numbers as $number) {
        if ($number === 3) {
            return $number;
        }
    }

    return 0;
}

var_dump(exercise1());*/

/*function exercise2(): array
{

    //Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    //Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]


    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    foreach ($numbers as $key => $number) {
        if ($number === 2) {
            unset($numbers[$key]);
        }
    }

    return $numbers;
}

var_dump(exercise2());*/

/*function exercise3(): array
{

    //Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    //Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]


    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];

    foreach ($numbers as $key => $number) {
        if (($number % 2) === 0) {
            unset($numbers[$key]);
        }
    }

    return $numbers;
}

var_dump(exercise3());*/

/*function getCities(): array
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

foreach (getCities() as $city) {
    echo $city['name'] . PHP_EOL;
}

function printCitiesName(array $cities): void
{
    foreach ($cities as $city) {
        echo $city['name'] . PHP_EOL;
    }
}

printCitiesName(getCities());*/


function getNumbers(): array
{
    return [
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
}

//var_dump(5 & 1);

function numbersSum(array $numbers): int
{
    $numbersSum = 0;

    foreach ($numbers as $number) {
        $numbersSum += $number;
    }

    return $numbersSum;
}

function evenNumbersSum(array $numbers): int
{
    $numbersSum = 0;

    foreach ($numbers as $number) {
        /*if (!($number & 1)) {
            $numbersSum += $number;
        }*/

        if (!($number % 2)) {
            $numbersSum += $number;
        }
    }

    return $numbersSum;
}

function positiveNumbersSum(array $numbers): int
{
    $numbersSum = 0;

    foreach ($numbers as $number) {
        if ($number > 0) {
            $numbersSum += $number;
        }
    }

    return $numbersSum;
}

function multiplicateNumbers(array $numbers): int
{
    $numbersSum = 0;

    foreach ($numbers as $number) {

    }

    return $numbersSum;
}

function addNewElements(array $numbers): void
{

    print_r($numbers);
}

var_dump(numbersSum(getNumbers()));
var_dump(evenNumbersSum(getNumbers()));
var_dump(positiveNumbersSum(getNumbers()));
var_dump(multiplicateNumbers(getNumbers()));
addNewElements(getNumbers());

function exercise4(int $id): array
{
    $prefix = 'product_';

    $products = [
        'product_1' => 'desk',
        'product_2' => 'lamp',
        'product_3' => 'sofa',
    ];

    unset($products[$prefix . $id]);


    //Sunaikinkitę visas $products masyve esančias reikšmes, kurių raktai yra prefikso ir ID junginys t.y. ($prefix . $id)
    //Grąžinkite pamodifikuotą masyvą.
    //Jeigu tokio rakto ($id) nėra, gražinkite null.
    //Funkcijai pridėkite trūkstamą return tipą.
    //Funkcijos kvietimas: exercise2(1)

    return $products;
}

var_dump(exercise4(2));

function exercise5(): array
{
    $transactions = [
        [
            'total' => 200,
            'status' => 'error',
        ],
        [
            'total' => 150,
            'status' => 'completed',
        ],
        [
            'total' => 120,
            'status' => 'error',
        ],
        [
            'total' => 100,
            'status' => 'completed',
        ],
        [
            'total' => 50,
            'status' => 'error',
        ],
    ];

    foreach ($transactions as $key => $transaction) {
        if ($transaction['status'] === 'error') {
            unset($transactions[$key]);
        }
    }

    return $transactions;

    /*
    Sunaikinkite visus elementus, kurių 'status' reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $transactions masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
    */
}

var_dump(exercise5());

function exercise6(string $key): ?string
{
    $products = [
        'product_1' => 'shirt',
        'product_2' => 'trousers',
        'product_98' => 'coat',
    ];

    /*foreach ($products as $key2 => $product) {
        if ($key === $key2) {
            return $product;
        }
    }*/


    if (isset($products[$key])) {
        return $products[$key];
    }

    return null;


//    Funkcija turi grąžinti reikšmę pagal paduotą raktą.
//    Jeigu paduotas raktas neegzistuoja $products masyve, grąžinkite null.
//    Pridėkite teisingą return tipą.
//    Funkcijos kvietimas: exercise4('product_2')

}

var_dump(exercise6('product_1'));


