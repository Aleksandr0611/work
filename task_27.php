<?php

declare(strict_types=1);
/**
 * @param string $str
 */

function wordsCount(string $str)
{
    $str = preg_replace('/\s+/', ' ', $str);
    $str = trim($str);
    $k[] = $str;
    if (empty($str)) {
        print_r($k);
    } else {
        $arr = [];
        foreach (explode(" ", $str) as $v) {
            if (!$arr[$v]) {
                $arr[$v] = 1;
            } else {
                $arr[$v]++;
            }
        }

        print_r($arr);
    }
}

wordsCount('  ');
wordsCount('  one two one');
wordsCount('  one      two       one     ');
