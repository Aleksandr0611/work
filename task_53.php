<?php

declare(strict_types=1);

/**
 * Class CsvReader
 */
class CsvReader
{
    protected $file;

    public function __construct($filePath)
    {
        $this->file = fopen($filePath, 'r');
    }

    public function rows()
    {
        $fp = fopen('file.csv', 'w');
        try {
            while (!feof($this->file)) {
                $row[] = fgetcsv($this->file, 30);
                $array1 = array_filter($row, fn($item) => $item[2] <= 6);
                $array2 = array_map(
                    fn($item) => [
                        1 => $item[1],
                        3 => $item[3],
                        4 => $item[4],
                        5 => $item[5]
                    ],
                    $array1
                );
                $array3 = array_filter($array2, fn($item) => $item[1] >= 020 || $item[1] <= 040);
                $array4 = array_map(
                    fn($item) => [
                        'sex' => $item[3],
                        'region' => $item[4],
                        'count' => $item[5]
                    ],
                    $array3
                );

                foreach ($array4 as $array5) {
                    yield fputcsv($fp, $array5);
                }
            }
        } finally {
            fclose($this->file);
            fclose($fp);
        }
        return;
    }
}

$csv = new CsvReader('Data8277.csv');
$fib = $csv->rows();
$count = 1000;
foreach ($fib as $value) {
    $count--;
    if ($count === 0) {
        echo $value . PHP_EOL;
        break;
    }
}
