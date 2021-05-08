<?php

declare(strict_types=1);
$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon', 'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];
/**
 * @param array $users
 */

function getSortedNames(array $users)
{
    foreach ($users as $row) {
        foreach ($row as $key => $value) {
            if ($key == 'name') {
                $arr[] = $value;
            }
        }
    }
    sort($arr);
    print_r($arr);
}

getSortedNames($users);
