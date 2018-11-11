/*
5. Visualizar el nombre y los apellidos de los vendedores en una misma columna en una misma columna, su fecha de registro y  el dia de la semana en la que se registraron
*/

SELECT CONCAT(nombre,' ',apellidos) as VENDEDORES, DAYNAME(fecha_alta) as 'Nombre del dia', fecha_alta as 'Fecha alta' 
FROM vendedores;