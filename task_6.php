<?php

declare(strict_types=1);

$cities = ['moscow', 'london', 'berlin', 'porto'];
/**
 * @param array $a
 * @param int $b
 * @param null $c
 */

function get(array $a, int $b, $c = null)
{
    if (($a[$b] == false) && ($c == null)) {
        $a[$b] = $c;
        echo $a[$b] = $c;
    } elseif ($a[$b] == false) {
        $a[$b] = $c;
        echo $a[$b] = $c;
    } else {
        echo $a[$b];
    }
}

get($cities, 1);