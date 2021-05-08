<?php

declare(strict_types=1);
$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];
/**
 * @param array $definitions
 * @return false
 */

function buildDefinitionList(array $definitions)
{
    if (empty($definitions)) {
        return false;
    }
    for ($i = 0; $i < count($definitions); $i++) {
        $j = 0;
        $definitions[$i][$j] = '<dt>' . $definitions[$i][$j] . '</dt>';
        $r = 1;
        $definitions[$i][$r] = '<dd>' . $definitions[$i][$r] . '</dd>';
    }


    foreach ($definitions as $ind => $val) {
        $mas1[] = implode("", $val);
        $mas = implode("", $mas1);
    }
    $definitions = '<dl>' . $mas . '</dl>';
    print_r($definitions);
}

buildDefinitionList($definitions);

