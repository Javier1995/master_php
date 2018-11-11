/*
4. Sacar todos los vendedores cuya fecha de alta sea posterior
al 1 de julio del 2018
*/

SELECT date(fecha) as 'Fecha de alta' FROM vendedores WHERE DAYOFWEEK(date(fecha_alta)) >= '2018-07-01';
