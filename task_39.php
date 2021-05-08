<?php

declare(strict_types=1);
/**
 * @param array $users
 * @return null
 */
function getManWithLessFriends(array $users)
{
    if (empty($users)) {
        return null;
    }
    foreach ($users as $row) {
        foreach ($row as $key => $value) {
            if (($key == 'friends')) {
                if (empty($value)) {
                    $friends[] = $row;
                }
            }
        }
    }
    print_r($friends[(count($friends) - 1)]);
}

$users = [
    [
        'name' => 'Tirion',
        'friends' => [
            ['name' => 'Mira', 'gender' => 'female'],
            ['name' => 'Ramsey', 'gender' => 'male']
        ]
    ],
    ['name' => 'Bronn', 'friends' => []],
    [
        'name' => 'Sam',
        'friends' => [
            ['name' => 'Aria', 'gender' => 'female'],
            ['name' => 'Keit', 'gender' => 'female']
        ]
    ],
    ['name' => 'Keit', 'friends' => []],
    [
        'name' => 'Rob',
        'friends' => [
            ['name' => 'Taywin', 'gender' => 'male']
        ]
    ],
];

getManWithLessFriends($users);
// => ['name' => 'Keit', 'friends' => []];

