<?php


$result = preg_match_all(
    "#^[1-9][0-9]{5}$#i",
    "123459",
    $math
);
/**
 * регулярное выражение проверяет является ли заданная строка шестизначным числом,
 * записанным в десятичной системе счисления без нулей в старших разрядах
 */
$result1 = preg_match_all(
    "#^[1-9][0-9]{5}$#i",
    "203456",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match_all(
    "#^[1-9][0-9]{5}$#i",
    "12345 ",
    $math2
);
print_r($result2);
print_r($math2);

//------------------------------------

$number = "123456";
/**
 * @param $number
 * @return false
 */
function passw($number)
{
    $numeric = [
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9'
    ];
    $numeric_zero = [
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
    /**
     * Проверяем на соответствие колличество элементов строки
     */
    $str = $number;
    if (mb_strlen($str) != 6) {
        return false;
    }
    /**
     * Проверяем на соответствие длину каждого элемента массива
     */
    if (!((mb_strlen($str[0]) === 1) && (mb_strlen($str[1]) === 1) && (mb_strlen($str[2]) === 1) &&
        (mb_strlen($str[3]) === 1) && (mb_strlen($str[4]) === 1) && (mb_strlen($str[5]) === 1))) {
        return false;
    }
    /**
     * Проверяем что первый символ соответствует заданным цифрам от 1 до 9 в массиве $numeric
     */
    foreach ($numeric as $val) {
        if ($str[0] == $val) {
            $a = true;
        }
    }
    /**
     * Проверяем что символы начиная со второго соответствуют заданным цифрам от 0 до 9 в массиве $numeric_zero
     */
    foreach ($numeric_zero as $val1) {
        if ($str[1] == $val1) {
            $b = true;
        }
        if ($str[2] == $val1) {
            $c = true;
        }
        if ($str[3] == $val1) {
            $d = true;
        }
        if ($str[4] == $val1) {
            $e = true;
        }
        if ($str[5] == $val1) {
            $f = true;
        }
    }
    if (!(($a == true) && ($b == true) && ($c == true) && ($d == true) && ($e == true) && ($f == true))) {
        return false;
    }

    echo PHP_EOL . $number;
}

passw($number);