/*
9. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo. 
*/

 SELECT cargo as CARGO, COUNT(cargo) AS PUESTO
 FROM vendedores 
 GROUP BY cargo;