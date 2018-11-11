/*
7. Mostrar todos los vendedores del grupo numero 2, oridenados por salario de mayor a menor
*/

SELECT g.id, g.nombre, v.nombre, sueldo 
FROM vendedores V 
INNER JOIN grupos G ON V.grupo_id = G.id 
WHERE G.id = 2 
ORDER BY sueldo DESC;