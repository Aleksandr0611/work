-- database: sqlite3 calculator.sqlite


create table purpose_loan
(
    id  INTEGER
        primary key,
    row TEXT
);
-- Используем механизм транзакций для корректного внесения изменений в базу данных calculator.sqlite
BEGIN;
INSERT INTO purpose_loan(id, row) VALUES(1, 'Автомобиль');
INSERT INTO purpose_loan(id, row) VALUES(2, 'Приобретение и монтаж оборудования по договору подряда');
INSERT INTO purpose_loan(id, row) VALUES(3, 'Бытовая техника');
INSERT INTO purpose_loan(id, row) VALUES(4, 'Ремонт и/или строительство');
INSERT INTO purpose_loan(id, row) VALUES(5, 'Ремонт жилых домов');
INSERT INTO purpose_loan(id, row) VALUES(6, 'Мебель и предметы интерьера');
INSERT INTO purpose_loan(id, row) VALUES(7, 'Туризм');
INSERT INTO purpose_loan(id, row) VALUES(8, 'Одежда');
INSERT INTO purpose_loan(id, row) VALUES(9, 'Лечение, спорт, косметология');
INSERT INTO purpose_loan(id, row) VALUES(10, 'Бизнес');
INSERT INTO purpose_loan(id, row) VALUES(11, 'Иное');
COMMIT;