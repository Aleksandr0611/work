<?php

declare(strict_types=1);
$path = "your directory delete";
/**
 * @param string $path //удаляемая директория. Задайте путь к директории, которую хотите удалить
 * @return bool
 */

function rrmdir(string $path)
{
    if (is_file($path)) {
        return unlink($path);
    }
    if (is_dir($path)) {
        foreach (scandir($path) as $p) {
            if (($p != '.') && ($p != '..')) {
                rrmdir($path . DIRECTORY_SEPARATOR . $p);
            }
        }
        return rmdir($path);
    }
    return false;
}

rrmdir($path);