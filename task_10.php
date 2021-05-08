<?php

declare(strict_types=1);
/**
 * @param array $array
 * @return bool
 */
function isContinuousSequence(array $array)
{
    if (empty($array)) {
        return false;
    }
    $first = reset($array);
    foreach ($array as $i => $num) {
        if ($num !== $i + $first) {
            return false;
        }
    }
    return true;
}

isContinuousSequence([10, 11, 12, 13]);