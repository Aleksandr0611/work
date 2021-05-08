<?php

declare(strict_types=1);
$filename = "composer.json";
/**
 * @param string $filename
 */
function getComposerFileData(string $filename)
{
    $string = file_get_contents($filename);
    $json_a = json_decode($string, true);
    print_r($json_a);
}

getComposerFileData($filename);