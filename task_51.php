<?php

declare(strict_types=1);
/**
 * @param int $n //находим среднее арифметическое n-го количества чисел
 * @param int $first
 * @param int $second
 *
 */
function lukasIter(int $n, int $first = 2, int $second = 1)
{
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }

    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $sum += $luk[$i];
    }


    echo $sum / (count($luk) - 1) . PHP_EOL;
}

lukasIter(6);

//--------------------------

/**
 * @param int $n //находим среднее геометрическое n-го количества чисел
 * @param int $first
 * @param int $second
 * @return mixed
 */
function lukasIter1(int $n, int $first = 2, int $second = 1)
{
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }
    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $sum[] = $luk[$i];
    }
    return $sum;
}

$array = lukasIter1(6);

/**
 * @param array $array
 * @return int
 */
function geometricMean(array $array)
{
    if (!count($array)) {
        return 0;
    }

    $total = count($array);
    $power = 1 / $total;

    $chunkProducts = array();
    $chunks = array_chunk($array, 10);

    foreach ($chunks as $chunk) {
        $chunkProducts[] = pow(array_product($chunk), $power);
    }

    $result = array_product($chunkProducts);
    echo $result . PHP_EOL;
}

geometricMean($array); //среднее геометрическое

//------------------------

/**
 * @param int $n //находим среднее гармоническое n-го количества чисел
 * @param int $first
 * @param int $second
 * @return string|true
 */
function lukasIter2(int $n, int $first = 2, int $second = 1)
{
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }
    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $sum[] = (1 / $luk[$i]);
    }
    $d = array_sum($sum) . PHP_EOL;
    echo $n / $d . PHP_EOL;
}

lukasIter2(6); //среднее гармоническое
//-----------------------


/**
 * @param int $n //находим медиану n-го количества чисел
 * @param int $first
 * @param int $second
 * @return mixed
 */
function lukasIter3(int $n, int $first = 2, int $second = 1)
{
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }
    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $sum[] = $luk[$i];
    }
    return $sum;
}

$arr = lukasIter3(6);
/**
 * @param array $arr
 * @return float|int|mixed
 */
function median(array $arr)
{
    sort($arr);
    $count = count($arr);
    $middle = floor($count / 2);
    if ($count % 2) {
        return $arr[$middle];
    } else {
        return ($arr[$middle - 1] + $arr[$middle]) / 2;
    }
}

print_r(median($arr)); //медиана
//------------------------------

/**
 * @param int $n //находим моду n-го количества чисел
 * @param int $first
 * @param int $second
 */
function lukasIter4(int $n, int $first = 2, int $second = 1)
{
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }
    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $array4[] = $luk[$i];
    }

    $freq = [];
    for ($i = 0; $i < count($array4); $i++) {
        if (isset($freq[$array4[$i]]) == false) {
            $freq[$array4[$i]] = 1;
        } else {
            $freq[$array4[$i]]++;
        }
    }
    $maxs = array_keys($freq, max($freq));

    for ($i = 0; $i < count($maxs); $i++) {
        if ($freq[$maxs[$i]] != 1)                  //проверка на повторение
        {
            echo $maxs[$i] . ' ' . $freq[$maxs[$i]];
        }
    }
}

$ar = lukasIter4(6); //мода

//----------------------
/**
 * @param int $n //находим среднее квадратичное отклонение n-го количества чисел
 * @param int $first
 * @param int $second
 */
function lukasIter5(int $n, int $first = 2, int $second = 1)
{
//if ($n<=2){echo}
    $luk = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $luk[] = $luk[$i] + $luk[$i - 1];
    }

    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $sum += $luk[$i];
    }

    $x = $sum / (count($luk) - 1);

    for ($i = 0; $i < (count($luk) - 1); $i++) {
        $sk += pow(($luk[$i] - $x), 2);
    }
    $del = ($sk / $n);
    $serq = sqrt($del);
    echo $serq;
}

lukasIter5(6); //среднее квадратичное отклонение