<?php

declare(strict_types=1);

$mat = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 1, 1]
];
/**
 * @param array $mat //3rd order matrix
 */


$resultMat = ($mat[0][0] * $mat[1][1] * $mat[2][2]) + ($mat[0][1] * $mat[1][2] * $mat[2][0]) +
    ($mat[0][2] * $mat[1][0] * $mat[2][1]) - ($mat[0][2] * $mat[1][1] * $mat[2][0]) -
    ($mat[0][0] * $mat[1][2] * $mat[2][1]) - ($mat[0][1] * $mat[1][0] * $mat[2][2]);

echo $resultMat;
