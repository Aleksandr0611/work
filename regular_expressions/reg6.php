<?php


$result = preg_match(
    "~^([012][1-9]|10|20|30|31)/(01|03|05|07|08|10|12)/((1[6-9]|[2-9][0-9])[0-9]{2})|([012][1-9]|10|20|30)/(04|06|09|11)/((1[6-9]|[2-9][0-9])[0-9]{2})|29/02/((1[6-9]|[2-9][0-9])(04|08|[13579][26]|[2468][480])|(16|[2468][048]|[3579][26])00)|(0[1-9]|1[0-9]|2[0-8])/02/((1[6-9]|[2-9][0-9])[0-9]{2})$~i",
    "29/02/2000",
    $math
);
/**
 * Регулярное выражение определяющее является ли данная строчка датой в формате dd/mm/yyyy. Начиная с 1600 года до 9999 года
 */
$result1 = preg_match(
    "~^([012][1-9]|10|20|30|31)/(01|03|05|07|08|10|12)/((1[6-9]|[2-9][0-9])[0-9]{2})|([012][1-9]|10|20|30)/(04|06|09|11)/((1[6-9]|[2-9][0-9])[0-9]{2})|29/02/((1[6-9]|[2-9][0-9])(04|08|[13579][26]|[2468][480])|(16|[2468][048]|[3579][26])00)|(0[1-9]|1[0-9]|2[0-8])/02/((1[6-9]|[2-9][0-9])[0-9]{2})$~i",
    "01/01/2003",
    $math1
);

print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match(
    "#^([012][1-9]|10|20|30|31)\/(01|03|05|07|08|10|12)\/((1[6-9]|[2-9][0-9])[0-9]{2})|([012][1-9]|10|20|30)\/(04|06|09|11)\/((1[6-9]|[2-9][0-9])[0-9]{2})|29\/02\/((1[6-9]|[2-9][0-9])(04|08|[13579][26]|[2468][480])|(16|[2468][048]|[3579][26])00)|(0[1-9]|1[0-9]|2[0-8])\/02\/((1[6-9]|[2-9][0-9])[0-9]{2})$#",
    "29/02/2004",
    $math2
);
print_r($result2);
print_r($math2);


$data = '30/04/9999';
/**
 * @param $data
 * @return false
 */
function dat($data)
{
    $str = $data;

    $str = explode("/", $str);
    $name = $str[0];
    $name1 = $str[1];
    $name2 = $str[2];

    if ((mb_strlen($name) === 2) && (mb_strlen($name1) === 2) && (mb_strlen($name2) === 4)) {
        // определение года сначала определим 3 и 4 цифру года
        for ($i = 2; $i < mb_strlen($name2); $i++) {
            if (($name2[$i] === '0') || ($name2[$i] === '1') || ($name2[$i] === '2') || ($name2[$i] === '3') ||
                ($name2[$i] === '4') || ($name2[$i] === '5') || ($name2[$i] === '6') || ($name2[$i] === '7') ||
                ($name2[$i] === '8') || ($name2[$i] === '9')) {
            } else {
                return false;
            }
        }
        // определим 2-ю цифру года если год начинается не с 0,1, , то есть с 2000 года
        if (($name2[0] != '1') || ($name2[0] != '0') || ($name2[0] != ' ')) {
            if (($name2[1] === '0') || ($name2[1] === '1') || ($name2[1] === '2') || ($name2[1] === '3') ||
                ($name2[1] === '4') || ($name2[1] === '5') || ($name2[1] === '6') || ($name2[1] === '7') ||
                ($name2[1] === '8') || ($name2[1] === '9')) {
            }
            // определим 2-ю цифру года если год начинается с 1 то есть с 1600 года
        } elseif ($name2[0] == '1') {
            if (($name2[1] === '6') || ($name2[1] === '7') || ($name2[1] === '8') || ($name2[1] === '9')) {
            }
        } else {
            return false;
        }
        // определим 1-ю цифру года
        if (($name2[0] === '1') || ($name2[0] === '2') || ($name2[0] === '3') || ($name2[0] === '4') ||
            ($name2[0] === '5') || ($name2[0] === '6') || ($name2[0] === '7') || ($name2[0] === '8') ||
            ($name2[0] === '9')) {
        } else {
            return false;
        }
        if ($name2 >= '1600') {
            $dete[2] = $name2;
        } else {
            return false;
        }

//------------------ месяца

        if (($name1 === '00') || ($name1 === '01') || ($name1 === '02') || ($name1 === '03') || ($name1 === '04') ||
            ($name1 === '05') || ($name1 === '06') || ($name1 === '07') || ($name1 === '08') || ($name1 === '09') ||
            ($name1 === '10') || ($name1 === '11') || ($name1 === '12')) {
            $dete[1] = $name1;
        }
// определяю дату в зависимости от количества дней в месяце
        // если в месяце 31 день
        if (($name1 === '01') || ($name1 === '03') || ($name1 === '05') || ($name1 === '07') || ($name1 === '08') ||
            ($name1 === '10') || ($name1 === '12')) {
            if (($name === '00') || ($name === '01') || ($name === '02') || ($name === '03') || ($name === '04') ||
                ($name === '05') || ($name === '06') || ($name === '07') || ($name === '08') || ($name === '09') ||
                ($name === '10') || ($name === '11') || ($name === '12') || ($name === '13') || ($name === '14') ||
                ($name === '15') || ($name === '16') || ($name === '17') || ($name === '18') || ($name === '19') ||
                ($name === '20') || ($name === '21') || ($name === '22') || ($name === '23') || ($name === '24') ||
                ($name === '25') || ($name === '26') || ($name === '27') || ($name === '28') || ($name === '29') ||
                ($name === '30') || ($name === '31')) {
                $dete[0] = $name;
            }
        }
// определяю дату в зависимости от количества дней в месяце
        // если в месяце 30 день
        if (($name1 === '04') || ($name1 === '06') || ($name1 === '09') || ($name1 === '11')) {
            if (($name === '00') || ($name === '01') || ($name === '02') || ($name === '03') || ($name === '04') ||
                ($name === '05') || ($name === '06') || ($name === '07') || ($name === '08') || ($name === '09') ||
                ($name === '10') || ($name === '11') || ($name === '12') || ($name === '13') || ($name === '14') ||
                ($name === '15') || ($name === '16') || ($name === '17') || ($name === '18') || ($name === '19') ||
                ($name === '20') || ($name === '21') || ($name === '22') || ($name === '23') || ($name === '24') ||
                ($name === '25') || ($name === '26') || ($name === '27') || ($name === '28') || ($name === '29') ||
                ($name === '30')) {
                $dete[0] = $name;
            }
        }

        // если  месяц февраль не высокосный год и высокосный 28 или 29 дней
        $ttt = ((int)$name2) % 4;
        if ((($ttt != 0) && ($name1 == '02'))) {
            if (($name === '00') || ($name === '01') || ($name === '02') || ($name === '03') || ($name === '04') ||
                ($name === '05') || ($name === '06') || ($name === '07') || ($name === '08') || ($name === '09') ||
                ($name === '10') || ($name === '11') || ($name === '12') || ($name === '13') || ($name === '14') ||
                ($name === '15') || ($name === '16') || ($name === '17') || ($name === '18') || ($name === '19') ||
                ($name === '20') || ($name === '21') || ($name === '22') || ($name === '23') || ($name === '24') ||
                ($name === '25') || ($name === '26') || ($name === '27') || ($name === '28')) {
                $dete[0] = $name;
            }
        } elseif (((($ttt == 0) && ($name1 == '02')))) {
            if (($name === '00') || ($name === '01') || ($name === '02') || ($name === '03') || ($name === '04') ||
                ($name === '05') || ($name === '06') || ($name === '07') || ($name === '08') || ($name === '09') ||
                ($name === '10') || ($name === '11') || ($name === '12') || ($name === '13') || ($name === '14') ||
                ($name === '15') || ($name === '16') || ($name === '17') || ($name === '18') || ($name === '19') ||
                ($name === '20') || ($name === '21') || ($name === '22') || ($name === '23') || ($name === '24') ||
                ($name === '25') || ($name === '26') || ($name === '27') || ($name === '28') || ($name === '29')) {
                $dete[0] = $name;
            }
        }
    } else {
        return false;
    }

    ksort($dete);

    $dete = implode("/", $dete);
    if ($data === $dete) {
        echo $dete;
    } else {
        return false;
    }
}

dat($data);
