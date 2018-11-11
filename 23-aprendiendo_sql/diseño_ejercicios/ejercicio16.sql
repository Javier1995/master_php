/*
16.Listado de clientes atendidos por el vendedor 'DAVID LOPEZ'

*/

 SELECT c.nombre, c.vendedor_id
 FROM clientes c  
 WHERE c.vendedor_id IN
 (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos ='Lopez')   
 


