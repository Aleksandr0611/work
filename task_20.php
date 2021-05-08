<?php

declare(strict_types=1);
/**
 * @param array $a
 * @param array $b
 * @return false
 */
function getIntersectionOfSortedArray(array $a, array $b)
{
    if ((empty($a)) || (empty($b))) {
        return false;
    }

    $set = array_intersect($a, $b);
    $set = array_unique($set);

    print_r($set);
}

/**
 * @param array $array1
 * @param array $array2
 * @return false
 */
function getIntersectionOfSortedArray1(array $array1, array $array2)
{
    if ((empty($array1)) || (empty($array2))) {
        return false;
    }
    foreach ($array1 as $k1 => $v1) {
        foreach ($array2 as $k2 => $v2) {
            if ($v1 == $v2) {
                $uniqueArray[] = $v1;
                unset($array2[$k2]);
            }
        }
    }
    print_r($uniqueArray);
}

getIntersectionOfSortedArray1([10, 11, 24], [10, 13, 14, 18, 24, 30]);

getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
