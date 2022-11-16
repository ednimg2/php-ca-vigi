<?php

/*
 * Parasykite funkcija countDown, kuriai galima paduoti argumenta (int)
 * Funkcija turi ivykdyti skaiciavima atgal nuo paduotos reiksmes
 * Panaudokite rekursija
 * Pvz.:
 *
 * Number is 10
 * Number is 9
 * Number is 8
 * ...
 * Number is 1
 */
function countDown()
{

}

//countDown(10);


/*
 * Parasykite funkcija, kuriai paduosim argumenta (int)
 * kuri isspausdins pirminius skaicius iki nurodytos reiksmes
 * 2, 3, 5, 7, 11, 13 ...
 */

function checkPrime(int $num): bool
{
    if ($num == 1) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++)
    {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function printPrimeNumber(int $numberTo): void
{
    for ($i = 1; $i <= $numberTo; $i++) {
        if (checkPrime($i) === true) {
            echo $i . ' ';
        }
    }
}

function printNotPrimeNumber(int $numberTo): void
{
    for ($i = 1; $i <= $numberTo; $i++) {
        if (checkPrime($i) === false) {
            echo $i . ' ';
        }
    }
}

printPrimeNumber(100);
echo PHP_EOL;
printNotPrimeNumber(100);