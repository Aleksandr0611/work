<?php

declare(strict_types=1);
$a = 5;
$b = 8;
/**
 * @param int $a
 * @param int $b
 */
function swap(int &$a, int &$b)
{
    $a = $a ^ $b;
    $b = $b ^ $a;
    $a = $a ^ $b;
}

swap($a, $b);
print_r($a);
print_r($b);

