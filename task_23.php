<?php

declare(strict_types=1);
$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];
/**
 * @param array $data
 * @param array $array_two
 */
function pick(array $data, array $array_two)
{
    $array_new = [];
    foreach ($array_two as $key) {
        if (array_key_exists($key, $data)) {
            $array_new[$key] = $data[$key];
        }
    }
    print_r($array_new);
}

pick($data, ['user']);
pick($data, ['user', 'os']);
pick($data, []);
pick($data, ['none']);
