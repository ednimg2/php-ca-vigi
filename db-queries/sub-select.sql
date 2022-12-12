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