<?php

declare(strict_types=1);
/**
 * @param int ...$value
 * @return null
 */
function average(int ...$value)
{
    if (func_num_args() == null) {
        return null;
    }
    for ($i = 0; $i < func_num_args(); $i++) {
        $result += func_get_arg($i);
    }
    if (func_num_args() == 0) {
        print_r($a = 0);
    } else {
        $result = $result / (func_num_args());
        print_r($result);
    }
}

average(-3, 4, 2, 10);