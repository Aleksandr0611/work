<?php

declare(strict_types=1);
/**
 * @param array $users
 * @return false
 */
function getGirlFriends(array $users)
{
    if (empty($users)) {
        return false;
    }
    foreach ($users as $row) {
        foreach ($row as $key) {
            if (is_array($key)) {
                foreach ($key as $keys => $value) {
                    if (!($value['gender'] == 'male')) {
                        $val[] = $value['name'];
                    }
                }
            }
        }
    }
    print_r($val);
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
    [
        'name' => 'Rob',
        'friends' => [
            ['name' => 'Taywin', 'gender' => 'male']
        ]
    ],
];

getGirlFriends($users);




