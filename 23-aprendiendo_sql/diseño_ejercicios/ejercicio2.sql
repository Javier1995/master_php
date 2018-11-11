/*
Modificar la comisión de los vendedores y ponerla a 2% cuando ganan mas de 50000
*/

UPDATE vendedores SET comision = 0.5 WHERE sueldo > 50000;