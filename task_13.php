<?php

declare(strict_types=1);

$data = [
    [-5, 7, 1],
    [3, 2, 3],
    [-1, -1, 10],
];
/**
 * @param array $data массив должен иметь только числовые (int) значения
 * @return null
 */

function getIndexOfWarmestDay(array $data)
{
    if ($data === []) {
        return null;
    }
    foreach ($data as $key => $days) {
        $heats[] = max($days);
        if (max($heats) === max($days)) {
            $index = $key;
        }
    }
    print_r($index);
}

getIndexOfWarmestDay($data);
