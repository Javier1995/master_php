/*
26. Visualizar los nombre de los clientes y la cantidad de encargos realizados
    incluyendo los que no hayan realizado
*/

SELECT c.id, c.nombre, COUNT(e.cantidad)
FROM clientes c
LEFT JOIN encargos e ON e.cliente_id = c.id
GROUP BY c.id
ORDER BY COUNT(e.cantidad) DESC;