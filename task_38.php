<?php

declare(strict_types=1);

define(
    'FREE_EMAIL_DOMAINS',
    [
        'gmail.com',
        'yandex.ru',
        'hotmail.com'
    ]
);
/**
 * @param array $emails
 * @return false
 * @const FREE_EMAIL_DOMAINS
 */

function getFreeDomainsCount(array $emails)
{
    if (empty($emails)) {
        return false;
    }
    foreach ($emails as $key => $domen) {
        $html = preg_replace('/\S+@([a-z0-9.-]+)/is', '$1', $domen);
        $value[] = $html;
    }
    $set = array_diff($value, FREE_EMAIL_DOMAINS);
    $set2 = array_diff($value, $set);
    $arr = [];
    foreach ($set2 as $v) {
        if (!$arr[$v]) {
            $arr[$v] = 1;
        } else {
            $arr[$v]++;
        }
    }
    print_r($arr);
}


$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@bitrix.com',
    'keys@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];

getFreeDomainsCount($emails);