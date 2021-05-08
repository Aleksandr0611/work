<?php

declare(strict_types=1);
/**
 * @param array $temperatures
 * @return null
 */

function calculateAverage(array $temperatures)
{
    if (empty($temperatures)) {
        return null;
    } else {
        $a = array_sum($temperatures);
        $num = $a / count($temperatures);
        print_r($num);
    }
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

calculateAverage($temperatures);

