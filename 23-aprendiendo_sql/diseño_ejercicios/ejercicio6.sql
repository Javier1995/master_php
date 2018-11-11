/*
6. Mostrar el nombre y el salario de los vendedores con cargo de ayudante
*/

SELECT CONCAT(nombre,' ',apellidos) as VENDEDORES, salario, cargo
FROM vendedores 
WHERE cargo = 'Ayudante de tienda';