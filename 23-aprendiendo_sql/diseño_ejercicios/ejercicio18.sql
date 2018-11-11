/*
18. Listar los clientes que han hecho algun encargo del coche 'Mercedes Ranchera'
*/

 SELECT cl.id, cl.nombre, co.modelo
 FROM clientes cl
 INNER JOIN encargos e ON cl.id = e.cliente_id
 INNER JOIN coches co  ON co.id = e.coche_id
 WHERE co.modelo = 'Mercedes Ranchera'
 
#TAMBIEN#

SELECT * 
FROM clientes
WHERE id IN
    (SELECT cliente_id FROM encargos 
     WHERE coche_id IN
        (SELECT id 
        FROM coches 
        WHERE modelo = 'Mercedes Ranchera')
    );