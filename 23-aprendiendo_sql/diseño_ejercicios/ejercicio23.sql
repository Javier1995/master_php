/*
22. Listar todos los encargos realizados con la marca del coche y el nombre del cliente
*/

SELECT e.id, co.modelo, c.nombre
FROM encargos e
INNER JOIN coches co ON e.coche_id = co.id
INNER JOIN clientes c ON c.id = e.cliente_id
ORDER BY e.id;
