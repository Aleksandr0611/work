<?php

declare(strict_types=1);
/**
 * @param array $array
 */
function getSameParity(array $array)
{
    if (empty($array)) {
        print_r($array);
    }

    $mode = current($array);

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            $array1[] = $array[$i];
        } elseif ($array[$i] % 2 != 0) {
            $array2[] = $array[$i];
        }
    }
    if ($mode % 2 == 0) {
        print_r($array1);
    }
    if ($mode % 2 != 0) {
        print_r($array2);
    }
}

getSameParity([1, 2, 3]);