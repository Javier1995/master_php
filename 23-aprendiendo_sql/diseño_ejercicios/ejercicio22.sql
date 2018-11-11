/*
21. Mostrar listado de clientes (Numero de cliente y el nombre) mostrar tambien el numero de vendedor y su nombre
*/

SELECT c.id, c.nombre, CONCAT(v.nombre,' ', v.apellidos) AS 'Nombre del vendedor', v.id AS 'Numero de vendedor'
FROM clientes c
INNER JOIN vendedores v ON c.vendedor_id = v.id
WHERE vendedor_id IN(SELECT id FROM vendedores)