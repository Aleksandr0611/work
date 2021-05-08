<?php

declare(strict_types=1);
/**
 * @param array $array
 */
function bubbleSort(array $array)
{
    if (empty($array)) {
        print_r($array);
    } else {
        for ($i = 1; $i < count($array); $i++) {
            $x = $array[$i];

            for ($j = $i - 1; $j >= 0 && $array[$j] > $x; $j--) {
                $array[$j + 1] = $array[$j];
            }

            $array[$j + 1] = $x;
        }

        print_r($array);
    }
}

bubbleSort([]);
bubbleSort([3, 10, 4, 3]);
