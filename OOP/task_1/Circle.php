<?php


class Circle
{
    private $radius;

    /**
     * Circle constructor.
     * @param int $radius
     */
    function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pow(($this->radius), 2) * M_PI . PHP_EOL;
    }

    public function getCircumference()
    {
        return $this->radius * 2 * M_PI;
    }
}

$object = new Circle(3);

$object->getArea();
$object->getCircumference();