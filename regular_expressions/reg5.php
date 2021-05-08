<?php

$result = preg_match_all(
    "~^#[0-9A-Fa-f]{6}$~",
    "#FFFFFF",
    $math
);
/**
 *Регулярное выражение определяющее является ли данная строка шестнадцатиричным идентификатором цвета в HTML
 */
$result1 = preg_match_all(
    "~^#[0-9A-Fa-f]{6}$~",
    "#FF3421",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match_all(
    "~^#[0-9A-Fa-f]{6}$~",
    "232323",
    $math2
);
print_r($result2);
print_r($math2);


$colors = "#FF3421";
/**
 * @param $colors
 * @return false
 */
function color($colors)
{
    $latin_alphabet_numeric = [
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '0'
    ];
    $str = $colors;
    if ($str[0] != '#') {
        return false;
    } else {
        $str = substr($str, 1);
    }
    /**
     * Проверяем на соответствие колличество элементов строки
     */
    if (mb_strlen($str) != 6) {
        return false;
    }

    $name = $str[0];
    $name1 = $str[1];
    $name2 = $str[2];
    $name3 = $str[3];
    $name4 = $str[4];
    $name5 = $str[5];


    /**
     * Проверяем на соответствие длину каждого элемента массива
     */
    if (!((mb_strlen($name) === 1) && (mb_strlen($name1) === 1) && (mb_strlen($name2) === 1) &&
        (mb_strlen($name3) === 1) && (mb_strlen($name4) === 1) && (mb_strlen($name5) === 1))) {
        return false;
    }
    /**
     * Проверяем на соответствие переданных символов заданным буквами цифрам в массиве $latin_alphabet_numeric
     */
    foreach ($latin_alphabet_numeric as $val) {
        if ($name[0] == $val) {
            $a = true;
        }
        if ($name1[0] == $val) {
            $b = true;
        }
        if ($name2[0] == $val) {
            $c = true;
        }
        if ($name3[0] == $val) {
            $d = true;
        }
        if ($name4[0] == $val) {
            $e = true;
        }
        if ($name5[0] == $val) {
            $f = true;
        }
    }
    if (!(($a == true) && ($b == true) && ($c == true) && ($d == true) && ($e == true) && ($f == true))) {
        return false;
    }

    echo PHP_EOL . $colors;
}

color($colors);


