Постановка задания:

Написать кредитный калькулятор. Пример https://www.rncb.ru/fizicheskkim-litsam/kreditovanie/
Требования к заданию:
1.	Задание должно быть оформлено в отдельном репозитории
2.	Название репозитория task_<login>_calculator 
3.	Репозиторий должен содержать описание вашего задания: постановка, описание решения, описание всех файлов входящих
 в состав репозитория, ссылку на приложение на вашей ВМ. Разместить в файле README.md 
4.	В качестве базы используем SQLite
5.	В системе контроля версий не должно быть директории vendor, файла базы данных, и любых временных файлов
6.	В репозитории должны быть файлы SQL для создания таблиц и заполнения данными
7.	Клиентская часть задания должна быть реализована на vue.js. Все изменения на странице должны выполняется без 
перезагрузки страницы
8.	Серверная часть должна быть написана на php версии 7+.
9.	Код должен быть оформлен по PSR-12
10.	Весь код должен быть задокументирован с phpdoc 
11.	Работа с БД должна использовать механизм транзакций
12.	Все запросы с клиентской стороны должны логироваться с уровнем логирования debug
13.	Все ошибки приложения должны логироваться с соответствующим уровнем логирования
14.	Использование готовых пакетов установленных с использованием composer разрешается.
15.	На клиентской стороне должна быть возможность сохранения файла в xlsx и pdf

Описание решения, описание всех файлов входящих в состав репозитория:

Установка
Для добавления необходимых библиотек нужно запустить установку пакетов
(которые записаны в файле composer.json): composer install
   
Требования к окружению 
PHP >=7.4
База данных SQLite3
Фронтенд фреймворк - vue.js

Использование
index.php содержит форму для внесения данных в кредитный калькулятор на этой странице производится расчёт
на стороне клиента без перезагрузки страницы. Процентная ставка по кредиту 16%, но если клиент ставит галочку,
 что получает зарплату/пенсию в банке РНКБ тогда процентная ставка снижается до 14% годовых.
  
Кнопка Submit выводит данные по расчету кредита.
  
Кнопка SubmitPDF сохраняет данные по расчету кредита в PDF файл.
  
Кнопка SubmitXLSX сохраняет данные по расчету кредита в XLSX файл.
pdf.php реализация php кода мы используем
классы PhpOffice\PhpSpreadsheet\IOFactory; и PhpOffice\PhpSpreadsheet\Spreadsheet; реализуют
создание файла с расширением Xlsx
$sheet->setCellValue() сохраняет значение в определённую ячейку Xlsx файла
класс \Mpdf\Mpdf(); реализует создание файла с расширением PDF
$mpdf->WriteHTML($data) - записывает код HTML
$mpdf->Output('myfile.pdf', 'D') -сохраняет и выводит PDF файл

В папке Sqlite_calculater:
dump_bd.sql - дамп создания базы данных SQLite таблицы и
заполнение таблицы (данные  это варианты цели  получения кредита)
   
В папке logs/critical/ файл log генерируется - в него записываются критические состояния
  
В папке logs/debug/ файл log генерируется - в него записываются события для отладки какого-либо процесса в системе
  
В папке js:
scripts.js - код vue.js для реализации калькулятора на стороне клиента,
vue.js - содержит библиотеку фреймворка vue.
  
В папке css - находится подключение bootstrap.css
Автор
Турчаников Александр - turchanikovai@gmail.com

Ссылка на приложение на моей ВМ:
http://turchanikov.intern.rarus-crimea.ru/index.php