<?php

declare(strict_types=1);

/**
 * @param array $latin_alphabet
 * @param array $cyrillic_alphabet
 * @param array $greek_alphabet
 */
$latin_alphabet = [
    'A',
    'B',
    'C',
    'D',
    'E',
    'F',
    'G',
    'H',
    'I',
    'J',
    'K',
    'L',
    'M',
    'N',
    'O',
    'P',
    'Q',
    'R',
    'S',
    'T',
    'U',
    'V',
    'W',
    'X',
    'Y',
    'Z'
];
$cyrillic_alphabet = [
    'A',
    'Б',
    'B',
    'Г',
    'Д',
    'E',
    'Ё',
    'Ж',
    'З',
    'И',
    'Й',
    'К',
    'Л',
    'M',
    'H',
    'O',
    'П',
    'P',
    'C',
    'T',
    'У',
    'Ф',
    'X',
    'Ц',
    'Ч',
    'Ш',
    'Щ',
    'Ъ',
    'Ы',
    'Ь',
    'Э',
    'Ю',
    'Я'
];
$greek_alphabet = [
    'A',
    'B',
    'Г',
    'Δ',
    'E',
    'Z',
    'H',
    'Θ',
    'I',
    'K',
    'Λ',
    'M',
    'N',
    'Ξ',
    'O',
    'П',
    'P',
    'Σ',
    'T',
    'Υ',
    'Ф',
    'X',
    'Ψ',
    'Ω'
];

$intersectionCyrLat = array_intersect($cyrillic_alphabet, $latin_alphabet);
//The result of intersection of letters of the Cyrillic and Latin alphabets

print_r($intersectionCyrLat);

$intersectionCyrGre = array_intersect($cyrillic_alphabet, $greek_alphabet);
//The result of the intersection of letters of the Cyrillic and Greek alphabets

print_r($intersectionCyrGre);

$intersectionLatGre = array_intersect($latin_alphabet, $greek_alphabet);
//The result of the intersection of the letters of the Greek and Latin alphabet

print_r($intersectionLatGre);

$intersectionLatGreCyr = array_intersect($cyrillic_alphabet, $intersectionLatGre);
//The result of intersection of letters of the Cyrillic, Latin and Greek alphabets

print_r($intersectionLatGreCyr);

$differenceLatCyr = array_diff($latin_alphabet, $cyrillic_alphabet);
$differenceLatCyrGre = array_diff($differenceLatCyr, $greek_alphabet);
//The result of the difference between the letters of the Latin alphabet from the Cyrillic and Greek alphabets

print_r($differenceLatCyrGre);

$differenceGreCyr = array_diff($greek_alphabet, $cyrillic_alphabet);
$differenceGreCyrLat = array_diff($differenceGreCyr, $latin_alphabet);
//The result of the difference between the letters of the Greek alphabet from the Cyrillic and Latin alphabets

print_r($differenceGreCyrLat);

$differenceCyrLat = array_diff($cyrillic_alphabet, $latin_alphabet);
$differenceCyrLatGre = array_diff($differenceCyrLat, $greek_alphabet);
//The result of the difference between the Cyrillic letters from the Latin and Greek alphabets

print_r($differenceCyrLatGre);
