<?php

declare(strict_types=1);
/**
 * @param int $number
 * @return string
 */
function isPrime(int $number)
{
    if ($number == 2) {
        return 'yes';
    }
    if ($number % 2 == 0) {
        return 'no';
    }
    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0) {
            return 'no';
        }
        $i += 2;
    }
    return 'yes';
}

/**
 * @param int $n
 */
function sayPrimeOrNot(int $n)
{
    print_r(isPrime($n));
}

sayPrimeOrNot(5);
sayPrimeOrNot(4);


