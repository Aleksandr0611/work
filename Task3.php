<?php

declare(strict_types=1);
/**
 * @param int $num
 */
$num = 12345;

function reverseInt(int $num)
{
    $num1 = abs($num);
    $num1 = (string)$num1;

    $digits = str_split($num1);

    $reversedDigits = [];
    for ($i = sizeof($digits) - 1; $i >= 0; $i--) {
        $reversedDigits[] = $digits[$i];
    }
    $newNumber = (int)implode('', $reversedDigits);

    echo($num > 0 ? $newNumber : -$newNumber);
}

reverseInt($num);