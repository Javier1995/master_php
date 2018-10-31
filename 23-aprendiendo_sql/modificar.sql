--RENOMBRA UNA TABLA--

ALTER TABLE usuarios RENAME to usuarios_renom;

-- Cambiar nombre de la columna--
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100);

--MODIFICAR COLUMNA SIN CAMBIAR NOMBRE --
ALTER TABLE usuarios_renom MODIFY apellido char(40) NOT NULL;

-- Cambiar a auto_increment--
ALTER TABLE usuarios_renom CHANGE id id int(55) auto_increment;

--AÑADIR COLUMNA--

ALTER TABLE usuarios_renom ADD website VARCHAR(100) NULL;

--AÑADIR RESTRICCION A COLUMNA --

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);


--BORRAR UNA COLUMNA--


ALTER TABLE usuarios_renom DROP website;