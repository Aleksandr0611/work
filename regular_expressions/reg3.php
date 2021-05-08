<?php

$result = preg_match_all(
    "#^[0-9a-fA-F]{2}(:[0-9a-fA-F]{2}){5}$#",
    "01:32:54:67:89:AB",
    $math
);

$result1 = preg_match_all(
    "#^[0-9a-fA-F]{2}(:[0-9a-fA-F]{2}){5}$#",
    "aE:dC:cA:56:76:54",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match_all(
    "#^[0-9a-fA-F]{2}(:[0-9a-fA-F]{2}){5}$#",
    "01:23:45:67:89:Az",
    $math2
);
print_r($result2);
print_r($math2);

//------------------------------------------------------------------

$mucstr = "aE:dC:cA:56:76:54";
/**
 * @param $mucstr
 * @return false
 * function muc() - проверяет является ли переданная строка правильным MAC-адресом.
 */
function muc($mucstr)
{
    $latin_alphabet_numeric = [
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
        'Z',
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z',
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
    $latin_alphabet_numeric1 = [
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
        'Z',
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

    $str = explode(":", $mucstr);
    $name = $str[0];
    $name1 = $str[1];
    $name2 = $str[2];
    $name3 = $str[3];
    $name4 = $str[4];
    $name5 = $str[5];
    /**
     * Проверяем на соответствие колличество элементов массива
     */
    if (count($str) != 6) {
        return false;
    }
    /**
     * Проверяем на соответствие длину каждого элемента массива
     */
    if (!((mb_strlen($name) === 2) && (mb_strlen($name1) === 2) && (mb_strlen($name2) === 2) &&
        (mb_strlen($name3) === 2) && (mb_strlen($name4) === 2) && (mb_strlen($name5) === 2))) {
        return false;
    }
    /**
     * Проверяем на соответствие переданных символов латинским заглавным, не заглавным буквам, а также цифрам от 0 до 9
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
    /**
     * Проверяем на соответствие переданных символов латинским заглавным буквам, а также цифрам от 0 до 9
     */
    foreach ($latin_alphabet_numeric1 as $val1) {
        if ($name[1] == $val1) {
            $a1 = true;
        }
        if ($name1[1] == $val1) {
            $b1 = true;
        }
        if ($name2[1] == $val1) {
            $c1 = true;
        }
        if ($name3[1] == $val1) {
            $d1 = true;
        }
        if ($name4[1] == $val1) {
            $e1 = true;
        }
        if ($name5[1] == $val1) {
            $f1 = true;
        }
    }
    if (!(($a1 == true) && ($b1 == true) && ($c1 == true) && ($d1 == true) && ($e1 == true) && ($f1 == true))) {
        return false;
    }
    echo PHP_EOL . $mucstr;
}

muc($mucstr);


