<?php

declare(strict_types=1);
/**
 * @param array $array
 * @param mixed ...$values
 */
function without(array $array, ...$values)
{
    $set = array_diff($array, $values);
    print_r($set);
}

without([3, 4, 10, 4, 'true'], 4); // => [3, 10, 'true']
without(['3', 2], 0, 5, 11); // => ['3', 2]
