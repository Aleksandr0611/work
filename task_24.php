<?php

declare(strict_types=1);

$array1 = ['one' => 'eon', 'two' => 'two', 'four' => true];
$array2 = ['two' => 'own', 'zero' => 4, 'four' => true];
/**
 * @param array $array1
 * @param array $array2
 */
function getDiff(array $array1, array $array2)
{
    $arr1 = array_diff_key($array1, $array2);

    foreach ($arr1 as $key => $value) {
        $arr1[$key] = 'deleted';
    }

    $arr2 = array_diff_key($array2, $array1);
    foreach ($arr2 as $key => $value) {
        $arr2[$key] = 'added';
    }

    $arr3 = array_intersect_key($array1, $array2);

    $arr4 = array_intersect($arr3, $array2);
    foreach ($arr4 as $key => $value) {
        $arr4[$key] = 'unchanged';
    }

    $arr5 = array_diff($arr3, $array2);
    foreach ($arr5 as $key => $value) {
        $arr5[$key] = 'changed';
    }

    $resul = array_merge($arr1, $arr2, $arr4, $arr5);
    print_r($resul);
}

getDiff($array1, $array2);
