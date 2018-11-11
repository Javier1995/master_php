/*
Vistas:
Las podemos definir como una consta almacenada en la base de datos qye se utiliza como una tabla
virtual.
No almacena datos sino que utiliza asociaciones y los datos originales
de las tablas, de forma que siempre esta actualizada
*/

CREATE VIEW entradas_con_nombre AS
    SELECT e.id, e.titulo, u.nombre AS 'AUTHOR', c.nombre AS 'CATEGORIA'
    FROM entradas e 
    INNER JOIN usuarios u ON e.usuario_id = u.id
    INNER JOIN categorias c ON e.categoria_id = c.id;