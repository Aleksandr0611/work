<?php

declare(strict_types=1);

$names = ['john', 'smith', 'karl'];
/**
 * @param array $a
 * @param int $b переданный индекс относительно которого меняются местами два элемента массива
 * @return array
 */
function swap(array $a, int $b)
{
    if ($a[$b + 1] == false) {
        return $a;
    } else {
        $s = $b + 1;
        $c = $b - 1;
        list($a[$c], $a[$s]) = array($a[$s], $a[$c]);
        return $a;
    }
}

$result = swap($names, 1);
print_r($result);

$result = swap($names, 2);
print_r($result);
