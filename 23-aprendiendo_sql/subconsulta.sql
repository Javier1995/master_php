/*
SUBCONSULTAS:
-Son cosultas que se ejecutan dentro de otras
-Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
-Jugando con las claves ajenas / foraneas
*/

#USUARIOS QUE TIENEN DATOS EN LA TABLA ENTRADAS#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

#USUARIOS QUE NO TIENEN DATOS EN LA TABLA ENTRADAS#
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);


#SACA LOS USUARIOS QUE EN TITILO HABLEN DE GTA 5#


SELECT nombre, apellidos FROM usuarios WHERE id 
IN(SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%'); 

#SACAR TODAS LAS CATEGORIAS DE ACCION#

SELECT * FROM entradas WHERE categoria_id 
IN(SELECT id FROM categorias WHERE nombre = 'ACCIÓN');

#MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS#

SELECT * FROM categorias WHERE id 
IN(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) > 3);

#MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entrada WHERE DAYOFWEEK(fecha) = 3)

#MOSTRAR LOS USUARIOS TENGA MÁS ENTRADAS#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(usuario_id) DESC LIMIT 1)

#MOSTRAR LAS CATEGORIAS SIN ENTRADAS#


