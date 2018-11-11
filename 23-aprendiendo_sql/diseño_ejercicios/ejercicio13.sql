/*
13. Visualizar las unidades totales vendidas de cada coche a cada cliente, mostrando el nombre del producto, numero de cliente y la suma de unidades*/

 SELECT SUM(e.cantidad), co.marca, c.nombre, c.gastado
 FROM encargos e  
 INNER JOIN clientes c ON e.cliente_id = c.id    
 INNER JOIN coches co  ON e.coche_id   = co.id
 GROUP BY e.coche_id, e.cliente_id
 ORDER BY e.cantidad

