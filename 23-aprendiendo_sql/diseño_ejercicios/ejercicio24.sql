/*
23. Listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la ciudad, pero unicamente cuando sean de madrid
*/

SELECT e.id, co.modelo, c.nombre, c.ciudad
FROM encargos e
INNER JOIN coches co ON e.coche_id = co.id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Tabasco'
ORDER BY e.id;
