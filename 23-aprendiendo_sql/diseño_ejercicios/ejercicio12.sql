/*
12. Sacar la media de sueldos entre todos lo vendedores por grupo
*/

 SELECT ROUND(AVG(v.sueldo), 2) as 'Media por grupo', g.nombre, g.ciudad
 FROM vendedores v
 RIGHT JOIN grupos g ON v.grupo_id =  g.id
 GROUP BY grupo_id;
