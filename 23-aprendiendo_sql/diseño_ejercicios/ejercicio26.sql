/*
25. Sacar vendedores que tiene jefe y el nombre del jefe
*/

SELECT v.nombre  as 'Empleado', CONCAT(ven.nombre,' ',ven.apellidos) AS 'Nombre de los jefes'
FROM vendedores v
INNER JOIN vendedores ven ON v.jefe = ven.id
