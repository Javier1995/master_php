/*
15.Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron 

*/

 SELECT  COUNT(c.id) as 'Numero de encargos', c.gastado, c.nombre, c.id
 FROM clientes c  
 INNER JOIN encargos e ON e.cliente_id = c.id    
 GROUP BY  e.cliente_id
 ORDER BY 1 DESC
 LIMIT 2;

