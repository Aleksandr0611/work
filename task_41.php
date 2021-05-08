<?php

declare(strict_types=1);
/**
 * @param array $array1
 * @param array $array2
 */
function getDifference(array $array1, array $array2)
{
    $count = count($array1);
    for ($i = 0; $i < $count; $i++) {
        foreach ($array2 as $value) {
            if ($array1[$i] == $value) {
                unset($array1[$i]);
            }
        }
    }
    print_r($array1);
}

getDifference([2, 1], [2, 3]);
