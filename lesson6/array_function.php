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

$array1 = [
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

var_dump(array_intersect($array1, $array2));


