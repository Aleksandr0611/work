<?php

declare(strict_types=1);
/**
 * @param array $a
 * @param array $b
 */
function getSameCount(array $a, array $b)
{
    $set = array_intersect($a, $b);
    $set = array_unique($set);
    $num = count($set);
    print_r($num);
}

getSameCount([], []);
getSameCount([1, 10, 3], [10, 100, 35, 1]);
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]);
