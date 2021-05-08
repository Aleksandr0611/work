<?php

$result = preg_match_all(
    "#^{[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}}|[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}$#i",
    "e02fa0e4-01ad-090A-c130-0d05a0008ba0",
    $math
);

$result1 = preg_match_all(
    "#^{[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}}|[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}$#i",
    "{e02fa0e4-01ad-090A-c130-0d05a0008ba0}",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);

$result2 = preg_match_all(
    "#^{[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}}|[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}$#i",
    "e02fd0e400fd090Aca300d00a0038ba0",
    $math2
);
print_r($result2);
print_r($math2);

$guidstr = "{e02fa0e4-01ad-090A-c130-0d05a0008ba0}";
/**
 * @param $guidstr
 * @return false
 * функция guid() определяет является ли данная строка GUID с или без скобок.
 */
function guid($guidstr)
{
    $num = mb_strlen($guidstr) - 1;

    if (($guidstr[$num] === '}') && ($guidstr[0] === '{')) {
        $guidstr = substr($guidstr, 1);
        $guidstr = substr($guidstr, 0, -1);
    }

    $str = explode("-", $guidstr);
    $name = $str[0];
    $name1 = $str[1];
    $name2 = $str[2];
    $name3 = $str[3];
    $name4 = $str[4];
    $b = 0;
    $c = 0;
    $d = 0;
    $k = 0;
    $a = 0;

    if ((mb_strlen($name) === 8) && (mb_strlen($name1) === 4) && (mb_strlen($name2) === 4) &&
        (mb_strlen($name3) === 4) && (mb_strlen($name4) === 12)) {
        for ($i = 0; $i < mb_strlen($name); $i++) {
            if (($name[$i] === '0') || ($name[$i] === '1') || ($name[$i] === '2') || ($name[$i] === '3') ||
                ($name[$i] === '4') || ($name[$i] === '5') || ($name[$i] === '6') || ($name[$i] === '7') ||
                ($name[$i] === '8') || ($name[$i] === '9') || ($name[$i] === 'A') || ($name[$i] === 'B') ||
                ($name[$i] === 'C') || ($name[$i] === 'D') || ($name[$i] === 'E') || ($name[$i] === 'F') ||
                ($name[$i] === 'a') || ($name[$i] === 'b') || ($name[$i] === 'c') || ($name[$i] === 'd') ||
                ($name[$i] === 'e') || ($name[$i] === 'f')) {
                $b++;
            }
        }


        for ($i = 0; $i < mb_strlen($name1); $i++) {
            if (($name1[$i] === '0') || ($name1[$i] === '1') || ($name1[$i] === '2') || ($name1[$i] === '3') ||
                ($name1[$i] === '4') || ($name1[$i] === '5') || ($name1[$i] === '6') || ($name1[$i] === '7') ||
                ($name1[$i] === '8') || ($name1[$i] === '9') || ($name1[$i] === 'A') || ($name1[$i] === 'B') ||
                ($name1[$i] === 'C') || ($name1[$i] === 'D') || ($name1[$i] === 'E') || ($name1[$i] === 'F') ||
                ($name1[$i] === 'a') || ($name1[$i] === 'b') || ($name1[$i] === 'c') || ($name1[$i] === 'd') ||
                ($name1[$i] === 'e') || ($name1[$i] === 'f')) {
                $c++;
            }
        }

        for ($i = 0; $i < mb_strlen($name2); $i++) {
            if (($name2[$i] === '0') || ($name2[$i] === '1') || ($name2[$i] === '2') || ($name2[$i] === '3') ||
                ($name2[$i] === '4') || ($name2[$i] === '5') || ($name2[$i] === '6') || ($name2[$i] === '7') ||
                ($name2[$i] === '8') || ($name2[$i] === '9') || ($name2[$i] === 'A') || ($name2[$i] === 'B') ||
                ($name2[$i] === 'C') || ($name2[$i] === 'D') || ($name2[$i] === 'E') || ($name2[$i] === 'F') ||
                ($name2[$i] === 'a') || ($name2[$i] === 'b') || ($name2[$i] === 'c') || ($name2[$i] === 'd') ||
                ($name2[$i] === 'e') || ($name2[$i] === 'f')) {
                $d++;
            }
        }

        for ($i = 0; $i < mb_strlen($name3); $i++) {
            if (($name3[$i] === '0') || ($name3[$i] === '1') || ($name3[$i] === '2') || ($name3[$i] === '3') ||
                ($name3[$i] === '4') || ($name3[$i] === '5') || ($name3[$i] === '6') || ($name3[$i] === '7') ||
                ($name3[$i] === '8') || ($name3[$i] === '9') || ($name3[$i] === 'A') || ($name3[$i] === 'B') ||
                ($name3[$i] === 'C') || ($name3[$i] === 'D') || ($name3[$i] === 'E') || ($name3[$i] === 'F') ||
                ($name3[$i] === 'a') || ($name3[$i] === 'b') || ($name3[$i] === 'c') || ($name3[$i] === 'd') ||
                ($name3[$i] === 'e') || ($name3[$i] === 'f')) {
                $k++;
            }
        }

        for ($i = 0; $i < mb_strlen($name4); $i++) {
            if (($name4[$i] === '0') || ($name4[$i] === '1') || ($name4[$i] === '2') || ($name4[$i] === '3') ||
                ($name4[$i] === '4') || ($name4[$i] === '5') || ($name4[$i] === '6') || ($name4[$i] === '7') ||
                ($name4[$i] === '8') || ($name4[$i] === '9') || ($name4[$i] === 'A') || ($name4[$i] === 'B') ||
                ($name4[$i] === 'C') || ($name4[$i] === 'D') || ($name4[$i] === 'E') || ($name4[$i] === 'F') ||
                ($name4[$i] === 'a') || ($name4[$i] === 'b') || ($name4[$i] === 'c') || ($name4[$i] === 'd') ||
                ($name4[$i] === 'e') || ($name4[$i] === 'f')) {
                $a++;
            }
        }
    }

    if (($b === (mb_strlen($name))) && ($c === (mb_strlen($name1))) && ($d === (mb_strlen($name2))) &&
        ($k === (mb_strlen($name2))) && ($a === (mb_strlen($name4)))) {
        echo PHP_EOL . $guidstr;
    } else {
        return false;
    }
}

guid($guidstr);
