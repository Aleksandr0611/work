<?php

declare(strict_types=1);
/**
 * @param array $users
 * @return false
 */
function getMensCountByYear(array $users)
{
    if (empty($users)) {
        return false;
    }
    foreach ($users as $key => $contact) {
        if (($contact['gender'] == 'female')) {
            unset($users[$key]);
        }
    }
    foreach ($users as $row) {
        foreach ($row as $key => $value) {
            if ($key == 'birthday') {
                $value = date("Y", strtotime($value));
                $st[] = $value;
            }
        }
    }
    $arr = [];
    foreach ($st as $v) {
        if (!$arr[$v]) {
            $arr[$v] = 1;
        } else {
            $arr[$v]++;
        }
    }
    print_r($arr);
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon', 'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
    ['name' => 'Robb', 'gender' => 'male', 'birthday' => '1980-05-14'],
    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
];

getMensCountByYear($users);
