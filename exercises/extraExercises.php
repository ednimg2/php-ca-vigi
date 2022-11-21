<?php

/*
 * Keliamieji metai. Parasykite funkcija, kuriai padavus metus (pvz.: 2020)
 * grazintu true - keliamieji metai, false - ne keliamieji
 * Pridekite teisinga return tipa
 *
 * Truputis info:
 *
 * The year can be evenly divided by 4,
 * If the year can be evenly divided by 100, it is NOT a leap year, unless;
 * The year is also evenly divisible by 400. Then it is a leap year.
 */

function isLeapYear(int $year): bool
{
    return (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0));
}

//var_dump(isLeapYear(2016));
//var_dump(date('L', strtotime('2023-01-01')));
//var_dump(checkdate(2, 29, 2022));

/*
 * Parasykite funkcija, kuri apskaiciuoti kiek palukanu z gausite is banko po x metu, jei palukanos y.
 * Pridekite teisinga return tipa
 *
 *
 */

function calculateInterestSum(float $deposit, int $year, float $interest): float
{
    $calculatedDeposit = $deposit;

    for ($i = 1; $i <= $year; $i++) {
        $calculatedDeposit += $calculatedDeposit * ($interest / 100);
    }

    return number_format($calculatedDeposit - $deposit, 2);

    /*$calculatedDeposit = array_reduce(
        range(1, $year),
        function (int $dep) use ($interest) {
            var_dump($dep + ($dep * ($interest / 100)));
            return $dep + ($dep * ($interest / 100));
        },
        $deposit
    );

    return $calculatedDeposit - $deposit;*/
}

//var_dump(calculateInterestSum(100, 5, 5));