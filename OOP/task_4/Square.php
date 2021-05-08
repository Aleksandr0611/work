<?php


class Square
{
    public $side;

    /**
     * Square constructor.
     * @param int $side
     */
    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }
}

$square = new Square(10);
print_r($square->getSide()); // 10
