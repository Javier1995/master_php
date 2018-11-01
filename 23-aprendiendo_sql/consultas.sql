#CONSULTAS AGRUPAMIENTO #

SELECT titulo FROM entradas GROUP BY categoria_id;


#CONSULTAS DE AGRUPAMIENTO CON CONDICIONES#
SELECT COUNT(titulo) AS 'NUMERO DE CATEGORIAS', C.nombre as 'NOMBRE DE LA CATEGORIA' 
FROM entradas AS E INNER JOIN categorias AS C ON E.categoria_id = C.id 
GROUP BY categoria_id
HAVING COUNT(titulo) >= 4;

/*
FUNCIONES DE AGRUPAMIENTO:
AVG sacar la media
COUNT Contar el numero de elementos
MAX valor maximo del grupo
MIN valor del grupo
SUM sumar todo el contenido del grupo

*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;

SELECT MAX(id) AS 'Maximo id', titulo FROM entradas;
SELECT MIN(id) AS 'Maximo id', titulo FROM entradas;
SELECT SUM(id) AS 'Maximo id', titulo FROM entradas;





