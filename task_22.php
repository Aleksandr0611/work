<?php
//$array = [1,2,3,[1,2,3,[1]]];
function getIn($array, $array1) {

    function array_reduce($array, $callback, $initial=null)
    {
        $acc = $initial;
        foreach($array as $a)
            $acc = $callback($acc, $a);
        return $acc;
    }























    /**if (!is_array($array)) {
         str_repeat("\t", $level) . $array.PHP_EOL;
        return $array;
    }
    //if (array_key_exists('a', $data)) {
     //   $inner1 = $data['a'];


        foreach ($array as $arrayItem) {
        getIn($arrayItem, $level);*/

}
$result = getIn($array, $array1);


$array = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];

getIn($array, ['undefined']);        // => null
getIn($array, ['user']);             // => 'ubuntu'
getIn($array, ['user', 'ubuntu']);   // => null
getIn($array, ['hosts', 1, 'name']); // => 'web2'
getIn($array, ['hosts', 0]);         // => ['name' => 'web1']
