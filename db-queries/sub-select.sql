use products;

-- sub-select in where clause (iskirtiniais atvejais)
SELECT
	id,
    name
FROM products
WHERE category_id = (
	SELECT id FROM categories WHERE name = 'Pieno produktai'
);

-- join table (geroji praktika)
SELECT
	P.id,
    P.name,
    C.name as category
FROM
	products as P
INNER JOIN categories as C ON C.id = P.category_id
WHERE C.name = 'Pieno produktai';


-- sub-select in select (nerekomenduojama)
SELECT
	P.id,
    P.name,
    (SELECT name FROM categories WHERE id = P.category_id) as category
FROM
	products as P
;

-- join table (geroji praktika)
SELECT
	P.id,
    P.name,
    C.name as category
FROM
	products as P
INNER JOIN categories as C ON C.id = P.category_id

    use marketplace;

-- sub-select product count (nerekomenduojamas)
SELECT
    ORD.id,
    (SELECT COUNT(id) FROM order_products WHERE order_id = ORD.id) as product_count
FROM orders as ORD;

-- sub-select product count with table join (rekomentuojamas)
SELECT
    ORD.id,
    COUNT(ORD_P.id) as product_count
FROM orders as ORD
         INNER JOIN order_products as ORD_P ON ORD_P.order_id = ORD.id
GROUP BY ORD.id


SELECT AVG(price) FROM products;


SELECT
    *
FROM products
WHERE
        price > (
        SELECT AVG(price) FROM products
    );

SELECT
    id,
    name,
    (price + 20) as price,
    price as olde_price
FROM products
WHERE
        price > (
        SELECT AVG(price) FROM products
    )
HAVING price < 150
;