<?php

declare(strict_types=1);
/**
 * @param array $users
 * @return false
 */
function takeOldest(array $users)
{
    if (empty($users)) {
        return false;
    }
    foreach ($users as $row) {
        foreach ($row as $key => $value) {
            if ($key == 'birthday') {
                $values[] = strtotime($value);
                $valuesMax = min($values);
            }
        }
    }

    foreach ($users as $row) {
        foreach ($row as $key => $value) {
            if ($key == 'birthday') {
                if (strtotime($value) == $valuesMax) {
                    print_r($row);
                }
            }
        }
    }
}

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

takeOldest($users);
