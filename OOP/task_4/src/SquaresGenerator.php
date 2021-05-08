<?php

require_once '../Square.php';

class SquaresGenerator
{
    public static $array = [];

    /**
     * @param int $sides
     * @param int $number
     * @return array
     */
    public static function generate(int $sides, int $number)
    {
        while (count(self::$array) < $number) {
            array_push(self::$array, new Square($sides));
        }
        return self::$array;
    }
}

$squares = SquaresGenerator::generate(3, 2);
print_r($squares);
// [new Square(3), new Square(3)];
