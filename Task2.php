<?php

declare(strict_types=1);
/**
 * @param string $word слово палиндром
 * @return bool
 */
$word = 'Abccba';
function isPalindrome(string $word)
{
    $word = mb_strtolower($word, 'UTF-8');
    $strrev = strrev($word);
    if ($word == $strrev) {
        return true;
    } else {
        return false;
    }
}

isPalindrome($word);