/*
24. Obtener una lista de los nombre de los clientes con el importe de sus encargos acumulados
*/

SELECT ci.nombre, SUM(co.precio*e.cantidad) as 'Importe'
FROM clientes ci 
INNER JOIN encargos e ON ci.id = e.cliente_id
INNER JOIN coches co  ON co.id = e.coche_id
GROUP BY ci.id;