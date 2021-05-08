<?php

declare(strict_types=1);
/**
 * @param string $sentence
 * @param array $array
 * @return false
 */
function makeCensored(string $sentence, array $array)
{
    if (empty($array)) {
        return false;
    }
    $sentencel = explode(" ", $sentence);

    for ($i = 0; $i < count($sentencel); $i++) {
        if ($sentencel[$i] == $array[0]) {
            $sentencel[$i] = '$#%!';
        } elseif ($sentencel[$i] == $array[1]) {
            $sentencel[$i] = '$#%!';
        }
    }

    $comm = implode(" ", $sentencel);
    print_r($comm);
}

$sentence = 'When you play the game of thrones, you win or you die';
makeCensored($sentence, ['die', 'play']);
