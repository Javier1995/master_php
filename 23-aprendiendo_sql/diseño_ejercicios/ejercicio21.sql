/*
20. Obtener los nombres y ciudades de los clientes con encargos
*/

SELECT nombre, ciudad, id
FROM clientes
WHERE id IN 
(SELECT cliente_id FROM encargos WHERE cantidad >= 3)