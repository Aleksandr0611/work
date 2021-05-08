<?php

declare(strict_types=1);

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];
/**
 * @param array $temperatures
 * @param int $value
 * @return false
 */

function findIndex(array $temperatures, int $value)
{
    if (empty($temperatures)) {
        return false;
    }
    $key = array_search($value, $temperatures);
    if ($key) {
        print_r($key);
    } else {
        print_r($val = -1);
    }
}


findIndex($temperatures, 34);


