<?php

/*var_dump(10);
var_dump(2.3);
var_dump('tekstas');
var_dump('10');

var_dump(true);

var_dump([1,'tekstas',3,true,5,4.5]);

var_dump(null);*/

/*$price = 100;
var_dump($price);

$isVAT = true;



$shippingPriceWithVat = 5;
$shipping_price = 5;*/


//$price = 5;

/*var_dump(isset($price));

$price = 5;*/

/*$greeting = 'Hello';
$newGreeting = $greeting;

//echo $greetings . PHP_EOL;
//echo $newGreetings . PHP_EOL;

$newGreeting = 'World';

var_dump($newGreeting, $greeting);*/

/*$greeting = 'Hello';
$newGreeting = &$greeting;

$newGreeting = 'World';
var_dump($greeting, $newGreeting);*/

/*$price = 100;
$price = (string) $price;
$price = (bool) $price;


$array = [];
$array = (bool) $array;

$string1 = 'Tekstas';
$string1 = (bool) $string1;

$string2 = '';
$string2 = (bool) $string2;

$string3 = '0';
$string3 = (bool) $string3;

$string4 = '0Tekstas';
$string4 = (bool) $string4;

//var_dump($string1, $string2, $string3, $string4);

$int = 100;
$int2 = 0;
$int = (bool) $int;
$int2 = (bool) $int2;

$float = 4.5;
$float = (bool) $float;

//var_dump($int, $int2, $float);

$string1 = 'Tekstas';
$string1 = (int) $string1;
$string2 = '10Tekstas';
$string2 = (int) $string2;
$string3 = 'Tekstas10';
$string3 = (int) $string3;

//var_dump($string1, $string2, $string3);

$boolean = true;
$boolean = (int) $boolean;
$boolean2 = false;
$boolean2 = (int) $boolean2;

//var_dump($boolean, $boolean2);*/

define('VAT', 1.21);
define('SHIPPING_PRICE', 10);

//var_dump(VAT, SHIPPING_PRICE);

/*$isVAT = false;
$price = 100;

if ($isVAT && $price > 100) {
    $price *= VAT;
} elseif ($isVAT && $price <= 100) {
    $price = ($price + SHIPPING_PRICE) * VAT;
} else {
    $price += SHIPPING_PRICE;
}

var_dump($price);*/

/*var_dump(1 === 1);
var_dump(1 === '1');
var_dump(1 == '1');
var_dump(1 == true);
var_dump(1 !== 1);
var_dump(1 != '1');
var_dump(4 > 3);
var_dump(3 > 3);
var_dump(3 >= 3);
var_dump(4 < 4);
var_dump(3 < 3);
var_dump(3 <= 3);*/

/*var_dump(1 == 1 && 2 == 2);
var_dump(1 == 1 && 2 == 3);
var_dump(1 == 1 || 2 == 2);
var_dump(1 == 1 || 3 == 2);
var_dump(2 == 1 || 3 == 2);*/

//$a = true;
//var_dump(!$a);

/*var_dump((1 == 1 && 2 == 2) || (1 == 2 || 3 == 4));
var_dump((1 == 1 && 2 == 2) && (1 == 2 || 3 == 4));*/

/*var_dump(2 ** 2);
var_dump(2 ** 3);
var_dump(2 ** 6);
var_dump(4 ** 2);*/

/*var_dump(4 % 2);
var_dump(4 % 3);*/

/*$i = 0;

var_dump($i);
var_dump(++$i);
var_dump(++$i);
var_dump(--$i);*/

/*$i = 0;

var_dump($i++);
var_dump($i);
var_dump($i--);
var_dump($i);*/

/*$i = 0;

while ($i < 4) {
    echo $i . PHP_EOL;
    $i++;
}*/

$x = 5;
$y = 3;

/*$x += $y; // $x = $x + $y

var_dump($x);*/

/*$x = 5;
$x -= $y; // $x = $x - $y
var_dump($x);

$x = 5;
$x *= $y; // $x = $x * $y
var_dump($x);

$x = 5;
$x /= $y; // $x = $x / $y
var_dump($x);

$x = 6;
$x %= $y; // $x = $ % $y
var_dump($x);*/

/*$txt1 = 'Hello';
$txt2 = 'World';

//echo $txt1 . $txt2;

$string = $txt1 . $txt2;

var_dump($string);

$txt1 .= $txt2; // $txt1 = $txt1 . $txt2

var_dump($txt1);*/

$isVat = true;

/*if ($isVat === true) {
    echo 'Taip, PVM moketojas' . PHP_EOL;
} else {
    echo 'Ne PVM moketojas' . PHP_EOL;
}*/

//echo ($isVat === true) ? 'Taip, PVM moketojas' : 'Ne PVM moketojas';

/*$price = 100;

$result = $price ?? 'Nera';

var_dump($result);*/

/*$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;

var_dump($variable7 === $variable8 && $variable9 == $variable10);
var_dump($variable7 > $variable10);*/

$variable10 = 10;

var_dump($variable10);
var_dump(isset($variable10));

/*define('CATEGORY_SMARTPHONE', 'smartphone');
define('CATEGORY_WASHING_MACHINE', 'washing_machine');
$productCategory = CATEGORY_WASHING_MACHINE;
$productPrice = 500;
$result = (
        $productCategory == CATEGORY_SMARTPHONE && $productPrice >= 1200
    ) || (
        $productCategory == CATEGORY_WASHING_MACHINE && ($productPrice >= 500 && $productPrice < 700)
    )
    ?? true;

var_dump($result);


$i = 0;

++$i;
++$i;
++$i;

var_dump($i);*/
