<?php

declare(strict_types=1);
/**
 * @param string $string
 */

function countUniqChars(string $string)
{
    $ttt = count_chars($string, $mode = 3);

    print_r(strlen($ttt));
}

$text1 = 'yyab';
countUniqChars($text1);

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2);

$text3 = '';
countUniqChars($text3);
