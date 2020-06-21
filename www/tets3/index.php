/*  Составить запрос SQL, который выберет все товары с ценой больше 50. */

SELECT
	*
FROM
	products
WHERE
	price > 50;

/* Составить запрос SQL, который удалит из таблицы все весовые товары. Штучные товары определяются значением 1 в поле kind. */

DELETE FROM
	products
WHERE
	kind = 0;

/* Составить запрос SQL, который выдаст число занесенных в таблицу товаров  и среднюю цену товара. */

SELECT
	count(id), avg(price)
FROM
	products;

/* Составить запрос SQL, который выбирает из таблицы все записи с нечетными  id и записывает их в новую таблицу  products_1 */

INSERT INTO
	products_1 (name, kind, price)
SELECT
	name, kind, price
FROM
	products
WHERE
	(products.id % 2) = 1;