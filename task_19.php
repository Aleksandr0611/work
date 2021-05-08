<?php

declare(strict_types=1);
/**
 * @param string $document
 * @return bool
 */
function checkIfBalanced(string $document)
{
    $replace = "";

    $search = "'([ 0-9-+*=/])+'";
    $text = preg_replace($search, $replace, $document);

    $s = $text;
    $c = strlen($s);

    $counter = 0;
    for ($i = 0; $i < $c; $i++) {
        if ($s[$i] == '(') {
            $counter++;
        } else {
            $counter--;
        }
        if ($counter < 0) {
            return false;
        }
    }
    if ($counter == 0) {
        return true;
    } else {
        return false;
    }
}

checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)');
checkIfBalanced('(4 + 3))');


