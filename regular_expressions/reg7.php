<?php


$result = preg_match(
    "#^[a-zA-Z_0-9]+([\.-]?[a-zA-Z_0-9]+)*@[a-zA-Z_0-9]+([\.-]?[a-zA-Z_0-9]+)*\.([a-zA-Z_0-9]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$#",
    "mail@mail.ru",
    $math
);
/**
 * Регулярное выражение определяющее является ли данная строка валидным E-mail адресом согласно RFC под номером 2822
 */
$result1 = preg_match(
    "#^[a-zA-Z_0-9]+([\.-]?[a-zA-Z_0-9]+)*@[a-zA-Z_0-9]+([\.-]?[a-zA-Z_0-9]+)*\.([a-zA-Z_0-9]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$#",
    "valid@megapochta.com",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match(
    "#^[a-zA-Z_0-9]+([\.-]?[a-zA-Z_0-9]+)*@[a-zA-Z_0-9]+([\.-]?[a-zA-Z_0-9]+)*\.([a-zA-Z_0-9]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$#",
    "12323123@111[]][]",
    $math2
);
print_r($result2);
print_r($math2);


$mmm = "mail@mail.ru";
/**
 * @param $mmm
 * @return false
 * функция maill() определяет является ли данная строка валидным E-mail адресом согласно RFC под номером 2822
 */
function maill($mmm)
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
        '0',
        '_'
    ];
    $str = explode("@", $mmm);
    $name = $str[0];
    $name1 = $str[1];
    if ((count($str)) != 2) {
        return false;
    }
    $str1 = explode(".", $name1);
    if ((count($str1)) != 2) {
        return false;
    }
    $nam = $str1[0];
    $nam1 = $str1[1];
    if (((empty($name))) || ((empty($name1)) && (($name1) != '0')) || ((empty($nam)) && (($nam) != '0')) ||
        ((empty($nam1)) && (($nam1) != '0'))) {
        return false;
    }
    for ($i = 0; $i < (mb_strlen($name)); $i++) {
        foreach ($latin_alphabet_numeric as $val) {
            if ($name[$i] == $val) {
                $a[] = $val;
            }
        }
    }

    $a = implode($a);
    if ($a != $name) {
        return false;
    }

    for ($i = 0; $i < (mb_strlen($nam)); $i++) {
        foreach ($latin_alphabet_numeric as $val) {
            if ($nam[$i] == $val) {
                $b[] = $val;
            }
        }
    }

    $b = implode($b);
    if ($b != $nam) {
        return false;
    }

    for ($i = 0; $i < (mb_strlen($nam1)); $i++) {
        foreach ($latin_alphabet_numeric as $val) {
            if ($nam1[$i] == $val) {
                $c[] = $val;
            }
        }
    }

    $c = implode($c);
    if ($c != $nam1) {
        return false;
    }
    $ttt = ($a . "@" . $b . "." . $c);
    if ($ttt == $mmm) {
        echo $ttt;
    } else {
        return false;
    }
}

maill($mmm);