<?php


/**
 * Регулярные выражения определяющие является ли данная строчка валидным URL адресом.
 * 1-й способ
 */
$result = preg_match(
    "~^((http:|https:)\/\/)?[A-Za-z0-9][-A-Za-z0-9]*[A-Za-z0-9](\.[A-Za-z0-9][-A-Za-z0-9]*[A-Za-z0-9])*(:[0-9]+)?(\/([A-Za-z0-9._]|%20)+)*(\?([A-Za-z0-9]|%20)+=([A-Za-z0-9]|%20)+(&([A-Za-z0-9]|%20)+=([A-Za-z0-9]|%20)+)*)?(#[A-Za-z0-9]+)?$~i",
    "http://zcontest.ru",
    $math
);
/**
 * 2-й способ
 */
$result1 = preg_match_all(
    "~^(?:(?:https?)://(?:[a-z0-9_-]{1,32}(?::[a-z0-9_-]{1,32})?@)?)?(?:(?:[a-z0-9-]{1,128}\.)+(?:ru|su|com|net|org|mil|edu|arpa|gov|biz|info|aero|inc|name|[a-z]{2})|(?!0)(?:(?!0[^.]|255)[0-9]{1,3}\.){3}(?!0|255)[0-9]{1,3})(?:/[a-z0-9.,_@%&?+=\~/-]*)?(?:#[^ '\"&]*)?$~i",
    "http://zcontest.ru",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match(
    "~^((http:|https:)//)?[A-Za-z0-9][-A-Za-z0-9]*[A-Za-z0-9](\.[A-Za-z0-9][-A-Za-z0-9]*[A-Za-z0-9])*(:[0-9]+)?(/([A-Za-z0-9._]|%20)+)*(\?([A-Za-z0-9]|%20)+=([A-Za-z0-9]|%20)+(&([A-Za-z0-9]|%20)+=([A-Za-z0-9]|%20)+)*)?(#[A-Za-z0-9]+)?$~",
    "http://zcontest.ru/dir%201/dir_2/program.ext?var1=x&var2=my%20value",
    $math2
);
print_r($result2);
print_r($math2);


$url = "http://zcontest.ru/dir%201/dir_2/program.ext?var1=x&var2=my%20value";

/**
 * @param $url
 * @return false
 * Функция urll определяющая является ли данная строчка валидным URL адресом.
 */
function urll($url)
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
        '-'
    ];
    $latin_alphabet_numeric1 = [
        '~',
        '!',
        '@',
        '#',
        '$',
        '%',
        '^',
        '&',
        '*',
        '(',
        ')',
        '[',
        ']',
        '{',
        '}',
        '_',
        '+',
        '=',
        ';',
        ':',
        '"',
        '/',
        '\\',
        '?',
        ' '
    ];

    $ttt = parse_url($url, PHP_URL_SCHEME);
    /**
     * Проверяем url в котором есть http или https
     */
    if (($ttt === 'http') || ($ttt === 'https')) {
        $str = explode("://", $url);
        $name = $str[0];
        $name1 = $str[1];
        if ((count($str)) != 2) {
            return false;
        }
        if (((empty($name))) || ((empty($name1)) && (($name1) != '0'))) {
            return false;
        }

        $host = parse_url($url, PHP_URL_HOST);
        $str1 = explode(".", $host);
        if (!((count($str1)) >= 2)) {
            return false;
        }
        $nam = $str1[0];
        $nam1 = $str1[1];
        $nam2 = $str1[2];
        if (!(mb_strlen($nam) >= 2)) {
            return false;
        }

        for ($i = 0; $i < (mb_strlen($host)); $i++) {
            foreach ($latin_alphabet_numeric1 as $val) {
                if (($host[0] === "-") || ($host[((mb_strlen($host)) - 1)] === "-")) {
                    return false;
                }
                if ($host[$i] == $val) {
                    return false;
                }
            }
        }
        for ($i = 0; $i < (mb_strlen($nam)); $i++) {
            foreach ($latin_alphabet_numeric as $val) {
                if (($nam[0] === "-") || ($nam[((mb_strlen($nam)) - 1)] === "-")) {
                    return false;
                }
                if ($nam[$i] == $val) {
                    $a[] = $val;
                }
            }
        }
        $a = implode($a);
        if ($a != $nam) {
            return false;
        }
        for ($i = 0; $i < (mb_strlen($nam1)); $i++) {
            foreach ($latin_alphabet_numeric as $val) {
                if (($nam1[0] === "-") || ($nam1[((mb_strlen($nam1)) - 1)] === "-")) {
                    return false;
                }
                if ($nam1[$i] == $val) {
                    $b[] = $val;
                }
            }
        }
        $b = implode($b);
        if ($b != $nam1) {
            return false;
        }
        if ($nam2) {
            for ($i = 0; $i < (mb_strlen($nam2)); $i++) {
                foreach ($latin_alphabet_numeric as $val) {
                    if (($nam2[0] === "-") || ($nam2[((mb_strlen($nam2)) - 1)] === "-")) {
                        return false;
                    }
                    if ($nam2[$i] == $val) {
                        $c[] = $val;
                    }
                }
            }
            $c = implode($c);
            if ($c != $nam2) {
                return false;
            }
        }
    } elseif (!($ttt)) {
        /**
         * Проверяем url в котором нет http или https и адрес выглядит например так zcon.com/index.html#bookmark
         */
        $url1 = $url;
        $url1 = stristr($url1, '/', true);
        $str2 = explode(".", $url1);
        $names = $str2[0];
        $names1 = $str2[1];
        $names2 = $str2[2];
        if (!(mb_strlen($names) >= 2)) {
            return false;
        }
        if (((empty($names))) || ((empty($names1)) && (($names1) != '0'))) {
            return false;
        }

        for ($i = 0; $i < (mb_strlen($names)); $i++) {
            foreach ($latin_alphabet_numeric as $val) {
                if (($names[0] === "-") || ($names[((mb_strlen($names)) - 1)] === "-")) {
                    return false;
                }
                if ($names[$i] == $val) {
                    $k[] = $val;
                }
            }
        }

        $k = implode($k);
        if ($k != $names) {
            return false;
        }
        for ($i = 0; $i < (mb_strlen($names1)); $i++) {
            foreach ($latin_alphabet_numeric as $val) {
                if (($names1[0] === "-") || ($names1[((mb_strlen($names1)) - 1)] === "-")) {
                    return false;
                }
                if ($names1[$i] == $val) {
                    $l[] = $val;
                }
            }
        }

        $l = implode($l);
        if ($l != $names1) {
            return false;
        }
        if ($names2) {
            for ($i = 0; $i < (mb_strlen($names2)); $i++) {
                foreach ($latin_alphabet_numeric as $val) {
                    if (($names2[0] === "-") || ($names2[((mb_strlen($names2)) - 1)] === "-")) {
                        return false;
                    }
                    if ($names2[$i] == $val) {
                        $m[] = $val;
                    }
                }
            }

            $m = implode($m);
            if ($m != $names2) {
                return false;
            }
        }
    }


    print_r($url);
}

urll($url);
