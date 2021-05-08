<?php

declare(strict_types=1);
/**
 * @param array ...$x
 */
function union(array ...$x)
{
    $set = array_merge(... $x);
    $ttt = array_unique($set, $sort_flags = SORT_LOCALE_STRING);
    $temp = array_values($ttt);
    print_r($temp);
}

union([3]);
union([3, 2], [2, 2, 1]);
union(['a', 3, false], [true, false, 3], [false, 5, 8]);
