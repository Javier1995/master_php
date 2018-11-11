/*
26. Mostrar todos los vendedores y el numero de clientes. Se deben mostrar que tengan o no cliente
*/

SELECT v.id, v.nombre, COUNT(c.id)
FROM vendedores v
LEFT JOIN clientes c ON v.id = c.vendedor_id
GROUP BY v.id
