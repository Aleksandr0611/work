<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('DEBUG LOGGER');
$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/debug/log', Logger::DEBUG));

$criticallogger = new Logger('CRITICAL LOGGER');
$criticallogger->pushHandler(new StreamHandler(__DIR__ . '/logs/critical/log', Logger::CRITICAL));
try {
    $logger->debug('Debug message', array('user' => 'admin', 'time' => date('H:i:s d.m.Y')));

    $criticallogger->critical('Critical error', array('errors' => 'messager-1', 'time' => date('H:i:s d/m/Y')));
} catch (Exception $exception) {
    print(sprintf('ошибка: %s', $exception->getMessage()) . PHP_EOL);
    print(sprintf('тип: %s', get_class($exception)) . PHP_EOL);
    print(sprintf('trace: %s', $exception->getTraceAsString()) . PHP_EOL);
}

//var_dump($_POST);
/**
 * @param float $_POST ['vehicle_value']
 */
// $balance - Сумма кредита
$balance = (float)$_POST['vehicle_value'];
// $interest_rate - проценты по кредиту
$interest_rate = 16;
// $sale_zp - скидка по кредиту для держателей зарплатных/пенсионных карт РНКБ
$sale_zp = 2;
/**
 * @param string $_POST ['zp']
 */
// Если есть такая карта то % по кредиту снижается до 14%
if ($_POST['zp']) {
    $interest_rate = $interest_rate - $sale_zp;
}
/**
 * @param int $_POST ['months']
 */
// $monthly_payment - сумма платежа по кредиту в месяц
// $_POST['months'] - колличество месяцов на выплату кредита
$monthly_payment = (($interest_rate / (100 * 12)) * (float)$_POST['vehicle_value']) / (1 - pow(
            1 + $interest_rate / 1200,
            ((int)-$_POST['months'])
        ));
/**
 * @param string $data
 */
// $data - хранит HTML страницу для генерации PDF файла
$data = '';
$data .= '<h1>Платежи</h1>';
/**
 * @param string $_POST ['currency']
 */
// $_POST['currency'] - валюта кредита
$data .= $fname = '<p>Платежи по кредиту:' . ($_POST['currency'] . number_format(
            (float)$monthly_payment * (int)$_POST['months'],
            2
        )) . '<br />';
$data .= $lname = 'Ежемесячный платеж:' . $_POST['currency'] . number_format((float)$monthly_payment, 2) . '<br />';
$data .= $kname = 'Итого переплата по кредиту:' . $_POST['currency'] . number_format(
        (float)$monthly_payment * (int)$_POST['months'] - $balance,
        2
    ) . '</p>';
/**
 * @param string $_POST ['submit']
 */
// При нажатии кнопки $_POST['submit'] происходит вывод данных по кредиту
if (isset($_POST['submit'])) {
    echo $fname;
    echo $lname;
    echo $kname;
    echo '<table>';
    echo '<tbody>';
    echo '<tr>';
    echo '<th>Месяц</th>';
    echo '<th>Баланс</th>';
    echo '<th>Тело кредита</th>';
    echo '<th>Проценты по кредиту</th>';
    echo '<th>Ежемесячный платёж</th>';
    echo '</tr>';

    for ($month = 0; $month < (int)$_POST['months']; $month++) {
        $interest = $balance * $interest_rate / 1200;
        $principal = $monthly_payment - $interest;

        echo '<tr>';
        echo '<td>' . ($month + 1) . '</td>';
        echo '<td>' . $_POST['currency'] . number_format($balance, 2) . '</td>';
        echo '<td>' . $_POST['currency'] . number_format($principal, 2) . '</td>';
        echo '<td>' . $_POST['currency'] . number_format($interest, 2) . '</td>';
        echo '<td>' . $_POST['currency'] . number_format($monthly_payment, 2) . '</td>';
        echo '</tr>';
// Уменьшение тела кредита с каждым месяцем платежей
        $balance -= $principal;
    }
    echo ' </tbody>
        </table>
    </div>';
}

// При нажатии кнопки $_POST['submitPDF'] происходит вывод данных по кредиту в PDF файле
if ($_POST['submitPDF']) {
// Создайте экземпляр класса:
    $mpdf = new \Mpdf\Mpdf();

    $data .= "<table>";
    $data .= '<tbody>';
    $data .= '<tr>';
    $data .= '<th>Месяц</th>';
    $data .= '<th>Баланс</th>';
    $data .= '<th>Тело кредита</th>';
    $data .= '<th>Проценты по кредиту</th>';
    $data .= '<th>Ежемесячный платёж</th>';
    $data .= '</tr>';

    for ($month = 0; $month < (int)$_POST['months']; $month++) {
        $interest = $balance * $interest_rate / 1200;
        $principal = $monthly_payment - $interest;

        $data .= '<tr>';
        $data .= '<td>' . ($month + 1) . '</td>';
        $data .= '<td>' . $_POST['currency'] . number_format($balance, 2) . '</td>';
        $data .= '<td>' . $_POST['currency'] . number_format($principal, 2) . '</td>';
        $data .= '<td>' . $_POST['currency'] . number_format($interest, 2) . '</td>';
        $data .= '<td>' . $_POST['currency'] . number_format($monthly_payment, 2) . '</td>';
        $data .= '</tr>';

        $balance -= $principal;
    }
    $data .= ' </tbody>';
    $data .= '</table>';
    $data .= '</div>';
// Записываем код HTML:
    $mpdf->WriteHTML($data);

// Выводим PDF-файл прямо в браузер
    $mpdf->Output('myfile.pdf', 'D');
}
// При нажатии кнопки $_POST['submitXLSX'] происходит вывод данных по кредиту в XLSX файле
if ($_POST['submitXLSX']) {
// Записываем данынне в определённые ячейки XLSX
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Месяц');
    $sheet->setCellValue('B1', 'Баланс');
    $sheet->setCellValue('C1', 'Тело кредита');
    $sheet->setCellValue('D1', 'Проценты по кредиту');
    $sheet->setCellValue('E1', 'Ежемесячный платёж');
    $i = 1;
    $s = 1;
    $k = 1;
    $d = 1;
    $l = 1;
    $mont = 0;
    for ($month = 0; $month < (int)$_POST['months']; $month++) {
        while ($mon < $_POST['months']) {
            $mon++;
            $mont++;
            $interest = $balance * $interest_rate / 1200;
            $principal = $monthly_payment - $interest;

            $i++;
            $s++;
            $k++;
            $d++;
            $l++;
            $sheet->setCellValue('A' . $i++, $mont);
            $sheet->setCellValue(
                'B' . $s++,
                $_POST['currency']
                . number_format($balance, 2)
            );
            $sheet->setCellValue(
                'C' . $k++,
                $_POST['currency']
                . number_format($principal, 2)
            );
            $sheet->setCellValue(
                'D' . $d++,
                $_POST['currency']
                . number_format($interest, 2)
            );
            $sheet->setCellValue(
                'E' . $l++,
                $_POST['currency']
                . number_format($monthly_payment, 2)
            );

            $balance -= $principal;
        }
    }
    // $file файл для записи .xlsx формата
    $file = 'sample' . time() . '.xlsx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $file . '"');

    try {
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    } catch (\PhpOffice\PhpSpreadsheet\Writer\Exception $e) {
        print(sprintf('ошибка: %s', $e->getMessage()) . PHP_EOL);
    }
    $writer->save('php://output');
}


