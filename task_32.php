<?php

declare(strict_types=1);
/**
 * @param string $str
 */
function slugify(string $str)
{
    $string = mb_strtolower(trim($str));
    $repl = str_replace(' ', "-", $string);
    echo "'" . $repl . "'" . PHP_EOL;
}

slugify('');
slugify('test');
slugify('test me');
slugify('La La la LA');
slugify('O la      lu');
slugify(' yOu   ');
