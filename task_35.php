<?php

declare(strict_types=1);
/**
 * @param array $users
 * @return false
 */
function getChildren(array $users)
{
    if (empty($users)) {
        return false;
    }
    foreach ($users as $row) {
        foreach ($row as $key => $value) {
            if (($key == 'children') && (!empty($value))) {
                $st[] = $value;
            }
        }
    }
    $arrOut = [];
    foreach ($st as $subArr) {
        $arrOut = array_merge($arrOut, array_values($subArr));
    }
    print_r($arrOut);
}

$users = [
    [
        'name' => 'Tirion',
        'children' => [
            ['name' => 'Mira', 'birdhday' => '1983-03-23']
        ]
    ],
    ['name' => 'Bronn', 'children' => []],
    [
        'name' => 'Sam',
        'children' => [
            ['name' => 'Aria', 'birdhday' => '2012-11-03'],
            ['name' => 'Keit', 'birdhday' => '1933-05-14']
        ]
    ],
    [
        'name' => 'Rob',
        'children' => [
            ['name' => 'Tisha', 'birdhday' => '2012-11-03']
        ]
    ],
];

getChildren($users);
