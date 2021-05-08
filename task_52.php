<?php

declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use MathPHP\Sequence\Advanced;
use MathPHP\Statistics\Average;
use MathPHP\Statistics\Descriptive;

$n = 6;
/**
 * @param int $n n-е количество чисел Люка
 */
$lucas = Advanced::lucasNumber($n); //последовательность чисел Люка
echo 'среднее арифметическое: ' . ($mean = Average::mean($lucas)) . PHP_EOL; //средне арифметическое
echo 'медиана: ' . ($median = Average::median($lucas)) . PHP_EOL;  // Медиана
echo 'Мода: ';
print_r($mode = Average::mode($lucas)); // Мода

echo 'среднее геометрическое: ' . ($geometric_mean = Average::geometricMean($lucas)) . PHP_EOL; //Средне геометрическое
echo 'среднее гармоническое: ' . ($harmonic_mean = Average::harmonicMean($lucas)) . PHP_EOL; //средне гармоническое
$sq = Descriptive::populationVariance($lucas);
echo 'среднее квадратичное отклонение' . sqrt($sq);