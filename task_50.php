<?php

declare(strict_types=1);
/**
 * @param $n
 * @param int $first
 * @param int $second
 * @return array|int[]
 */
function lukasIter(int $n, int $first = 2, int $second = 1)
{
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }
    return $luk;
}

print_r(lukasIter(10));


/**
 * @param int $number
 * @return int
 */
function getLukasRecurrsion(int $number)
{
    if (0 === $number) {
        return 2;
    }

    if (1 === $number) {
        return 1;
    }

    return (getLukasRecurrsion($number - 1) +
        getLukasRecurrsion($number - 2));
}

/**
 * @param int $number
 */
function setLukRecurrsion(int $number)
{
    $s = 1;
    $luk = getLukasYield();
    while ($s <= $number) {
        $s++;
        echo $luk->current() . PHP_EOL;
        $luk->next();
    }
}

setLukRecurrsion(10);


/**
 * @return Generator
 */
function getLukasYield()
{
    $i = 2;
    $k = 1;
    yield 2;
    yield 1;

    while (true) {
        $k = $i + $k;
        $i = $k - $i;
        yield $k;
    }
}

/**
 * @param int $num
 */
function setLukasYield(int $num)
{
    $s = 1;
    $luk = getLukasYield();
    while ($s <= $num) {
        $s++;
        echo $luk->current() . PHP_EOL;
        $luk->next();
    }
}

setLukasYield(10);

