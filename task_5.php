<?php

declare(strict_types=1);
/**
 * @param int $a
 * @param int $b
 * @param int $c
 */
function descr(int $a, int $b, int $c)
{
    $d = ($b * $b) - 4 * ($a) * ($c);
    if ($d > 0) {
        echo 'x1 = ' . ' ' . ($b * (-1) + sqrt($d)) / (2 * $a) . "<br/>";
        echo 'x2 = ' . ' ' . ($b * (-1) - sqrt($d)) / (2 * $a);
    }
    if ($d == 0) {
        echo 'x1, x2 =' . ' ' . ($b * (-1)) / 2 * $a;
    } else {
        if ($d < 0) {
            echo "Дискриминант меньше 0, решений нет";
        }
    }
}

$a = 5;
$b = 14;
$c = -7;
descr($a, $b, $c);

