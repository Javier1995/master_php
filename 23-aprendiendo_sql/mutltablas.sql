/*
CONSULTA MULTITABLES
Son consultas pque sirven para consultar variabs tablas en una sola sentencia
*/


#MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA#

SELECT e.id, e.titulo, u.nombre, c.nombre 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#CON INNER JOIN#

SELECT e.id, e.titulo, u.nombre, c.nombre 
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;



#MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y A LADO CUANTAS ENTRADAS TIENEN#

SELECT c.nombre as 'Nombre de cateogira', COUNT(e.id) as 'CANTIDAD', c.id
FROM categorias c, entradas e 
WHERE e.categoria_id = c.id 
GROUP BY e.categoria_id;

#CON LEFT JOIN#

SELECT c.nombre as 'Nombre de cateogira', COUNT(e.id) as 'CANTIDAD', c.id
FROM categorias c
LEFT JOIN entradas e ON c.id =  e.categoria_id 
GROUP BY e.categoria_id;

#CON RIGHT JOIN#

SELECT c.nombre as 'Nombre de cateogira', COUNT(e.id) as 'CANTIDAD', c.id
FROM entradas e
RIGHT JOIN categorias c ON c.id =  e.categoria_id 
GROUP BY e.categoria_id;

#MOSTRAR EL EMAIL DE LOS USUARIOS Y AL ALDO CUANTAS ENTRADAS TIENEN#

SELECT u.email, COUNT(e.usuario_id) as 'Cuantas entradas'
FROM usuarios u, entradas e 
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id
ORDER BY COUNT(e.usuario_id) DESC;


