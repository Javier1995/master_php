#CONSULTA CON UNA CONDICION

SELECT * FROM usuarios WHERE email = 'quiroga218@gmail.com';

/*Operadores de comparacion
igual   =
distinto  != <>
menor que <
mayor >
menor igual <=
mayor igual >=
between    entre
en       in
es nulo   ISNULL
no nullo      is not null
COMO            LIKE
NO ES COMO      NOT LIKE
*/


#EJEMPLOS#

/*
1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019
*/

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = '2019';


/*
1. Mostrar nombre y apellidos de todos los usuarios que no estan registrados en el 2019
*/

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != '2019'; 

/*OPERADORES LOGICOS:
    O OR
    Y AND
    NO NOT
*/

/*
COMODINES:
cualquier cantidad de caracteres: %
un caracter desconocido: _
*/

#3. MOSTRAR EL EMAUL DE LOS USUARIOS CUYO APELLIDO CONTENGA LA LETRA A  Y QUE SU CONTRASEÑA#
SELECT email FROM usuarios WHERE apellidos LIKE '%q'; 


#4. SACAR  TODOS LOS REGISTROS DE LA TABLA USUARIO CUYO AÑO SEA IMPAR#

SELECT * FROM usuarios WHERE YEAR(fecha) % 2 != 0;

#5. sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes de 2020 y mostrar el nombre en mayuscula#

SELECT UPPER(nombre), * FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) > '2020';