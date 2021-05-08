<?php


$result = preg_match_all(
    "#^([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])){3}$#",
    "255.255.255.0",
    $math
);
/**
 * регулярное выражение проверяет, является ли заданная строка IP адресом, записанным в десятичном виде
 */
$result1 = preg_match_all(
    "#^([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])){3}$#",
    "192.168.0.1",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match(
    "#^([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])){3}$#",
    "1300.6.7.8",
    $math2
);
print_r($result2);
print_r($math2);


$zend = "192.168.0.1";
echo PHP_EOL;
/**
 * @param $zend
 * @return false
 * функция ip() проверяет, является ли заданная строка IP адресом, записанным в десятичном виде
 */
function ip($zend)
{
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
    $numeric_zero1 = [
        '1',
        '2'
    ];
    $numeric_zero0 = [
        '1',
        '0'
    ];

    $str = $zend;

    $str = explode(".", $str);
    $name = $str[0];
    $name1 = $str[1];
    $name2 = $str[2];
    $name3 = $str[3];

    foreach ($str as $k) {
        trim($k);
        if (($k === '') || ($k === false) || ($k === " ")) {
            return false;
        }
    }
    if ((empty($name)) || ((empty($name1)) && (($name1) != '0')) || ((empty($name2)) && (($name2) != '0')) || ((empty($name3)) && (($name3) != '0'))) {
        return false;
    }
    foreach ($numeric_zero1 as $val) {
        if ($name[0] == $val) {
            $nem[0][0] = $val;
        }
    }
    foreach ($numeric_zero as $val1) {
        if ($name[1] == $val1) {
            $nem[0][1] = $val1;
        }
        if ($name[2] == $val1) {
            $nem[0][2] = $val1;
        }
    }
    if ((mb_strlen($name1) === 3)) {
        foreach ($numeric_zero1 as $val2) {
            if ($name1[0] == $val2) {
            }
        }
        $nem[1][0] = $val2;
        foreach ($numeric_zero as $val3) {
            if ($name1[1] == $val3) {
                $nem[1][1] = $val3;
            }
            if ($name1[2] == $val3) {
                $nem[1][2] = $val3;
            }
        }
    } elseif ((mb_strlen($name1) === 1)) {
        foreach ($numeric_zero0 as $val4) {
            if ($name1[0] == $val4) {
            }
        }
        $nem[1][0] = $val4;
    } else {
        return false;
    }
    if ((mb_strlen($name2) === 3)) {
        foreach ($numeric_zero1 as $val2) {
            if ($name2[0] == $val2) {
                $nem[2][0] = $val2;
            }
        }
        foreach ($numeric_zero as $val3) {
            if ($name2[1] == $val3) {
                $nem[2][1] = $val3;
            }
            if ($name2[2] == $val3) {
                $nem[2][2] = $val3;
            }
        }
    } elseif ((mb_strlen($name2) === 1)) {
        foreach ($numeric_zero0 as $val4) {
            if ($name2[0] == $val4) {
                $nem[2][0] = $val4;
            }
        }
    } else {
        return false;
    }
    if ((mb_strlen($name3) === 1) && (($name3[0] === '0') || ($name3[0] === '1'))) {
        $nem3 = $name3[0];
    } else {
        return false;
    }

    $name = (int)$name;
    $name1 = (int)$name1;
    $name2 = (int)$name2;
    $name3 = (int)$name3;
    if ((($name <= 255) && (($name1) >= 100))) {
        echo $name . ':';
    } else {
        return false;
    }
    if ((($name1 <= 255) && (($name1) >= 0))) {
        echo $name1 . ':';
    } else {
        return false;
    }
    if ((($name2 <= 255) && (($name2) >= 0))) {
        echo $name2 . ':';
    } else {
        return false;
    }
    if ((($name3 == 0) || (($name3) == 1))) {
        echo $name3;
    } else {
        return false;
    }

    if (!((mb_strlen($name) === 3) && ((3 >= (mb_strlen($name1))) || ((mb_strlen($name1)) >= 1)) &&
        ((3 >= (mb_strlen($name2))) || ((mb_strlen($name2)) >= 1)) && (mb_strlen($name3) === 1))) {
        return false;
    }
}

ip($zend);

