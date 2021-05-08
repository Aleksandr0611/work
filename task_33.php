<?php

declare(strict_types=1);
/**
 * @param string $a
 * @return null
 */
$last = function (string $a) {
    if (empty($a)) {
        return null;
    }
    $rest = substr($a, -1);
    print_r($rest);
};

$last('');
$last('pow');
$last('kids');
