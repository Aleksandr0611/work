<?php

declare(strict_types=1);
/**
 * @param string $a
 * @param string $b
 */
function cd(string $a, string $b)
{
    $rest = substr($b, 0, 1);
    $rest1 = substr($b, 0, 5);
    $rest2 = dirname($a);
    $basename = basename($b);

    if ($rest == '/') {
        echo $b;
    } elseif ($rest1 == '.././') {
        $dr = $rest2 . '/' . $basename;

        echo $dr;
    }
}

cd('/current/path', '/etc'); // /etc
cd('/current/path', '.././anotherpath'); // /current/anotherpath