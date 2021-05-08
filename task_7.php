<?php

declare(strict_types=1);

$names = ['john', 'smith', 'karl'];
/**
 * @param array $a
 * @param string $b префикс к каждому элементу массива
 * @return mixed
 */

function addPrefix(array $a, string $b)
{
    foreach ($a as $value) {
        $value1 [] = $b . ' ' . $value;
    }
    return $value1;
}


$newNames = addPrefix($names, 'Mr');
print_r($newNames);


