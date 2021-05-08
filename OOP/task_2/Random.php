<?php


class Random
{
    private $seed;
    private $seed_res;

    /**
     * Random constructor.
     * @param int $seed
     */
    function __construct(int $seed)
    {
        $this->seed = $seed;
        $this->seed_res = $seed;
    }

    public function getNext()
    {
        $this->seed_res = ((5 * $this->seed_res + 8) % 67);
        return $this->seed_res;
    }

    public function reset()
    {
        $this->seed_res = $this->seed;
    }
}

$seq = new Random(100);
$result1 = $seq->getNext();
$result2 = $seq->getNext();

print_r($result1 != $result2); // => true

$seq->reset();

$result21 = $seq->getNext();
$result22 = $seq->getNext();

print_r($result1 == $result21); // => true
print_r($result2 == $result22); // => true
