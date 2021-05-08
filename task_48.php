<?php

declare(strict_types=1);

namespace Matrix;

require_once __DIR__ . '/vendor/autoload.php';

$matrix = [
    [1, 2, 9],
    [4, 5, 6],
    [7, 1, 1]
];
/**
 * @param array $matrix
 * @return false|float
 * @throws Exception
 */
function mat(array $matrix)
{
    if (empty($matrix)) {
        return false;
    }

    return determinant($matrix);
}

print_r(mat($matrix));