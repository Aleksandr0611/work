<?php

$result = preg_match_all(
    "#^abcdefdhsf\^dsdsвВВo\*18340$#",
    "abcdefdhsf^dsdsвВВo*18340",
    $math
);

$result1 = preg_match_all(
    "#abcdefdhsf^dsdsвВВo*18340#i",
    "abcdefghijklmnoasdfasdpqrstuv18340",
    $math1
);
print_r($result);
print_r($math);

print_r($result1);
print_r($math1);


$pattern = "abcdefdhsf^dsdsвВВo*18340";
$subject = "abcdefdhsf^dsdsвВВo*18340";
/**
 * @param $pattern
 * @param $subject
 * @return bool
 */
function regul($pattern, $subject)
{
    if ($pattern === $subject) {
        return true;
    } else {
        return false;
    }
}

print_r(regul($pattern, $subject));
