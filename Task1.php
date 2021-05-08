<?php

declare(strict_types=1);
/**
 * @param string $word слово палиндром
 * @return bool
 */

$word = "ada";

function isPalindrome(string $word)
{
    if (empty($word)) {
        return false;
    }
    $word = mb_strtolower($word, 'UTF-8');
    $lenght = strlen($word);

    if ($lenght == 1) {
        return true;
    }

    $split = ceil($lenght / 2);

    for ($i = 1; $i <= $split; $i++) {
        $first = $i - 1;
        $last = $lenght - $i;
        if ($word[$first] != $word[$last]) {
            return false;
        }
    }
    return true;
}

isPalindrome($word);

