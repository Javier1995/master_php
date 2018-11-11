/*
    1. Diseñar y crear la base de datos de un concesionario
*/

DROP DATABASE IF EXISTS concesionario;
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id      INT(255) AUTO_INCREMENT NOT NULL,
modelo  VARCHAR(100) NOT NULL,
marca   VARCHAR(100),
precio  FLOAT NOT NULL,
stock   INT NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY(id),
CONSTRAINT uq_modelo UNIQUE(modelo),
CONSTRAINT uq_marca  UNIQUE(marca)
)ENGINE=InnoDB;

CREATE TABLE grupos(
id      INT(255) AUTO_INCREMENT  NOT NULL,
nombre  VARCHAR(100) NOT NULL,
ciudad  VARCHAR(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id         INT(100) AUTO_INCREMENT  NOT NULL,
grupo_id   INT(255) NOT NULL,
jefe       INT(10),
nombre     VARCHAR(100) NOT NULL,
apellidos  VARCHAR(100) NOT NULL,
cargo      VARCHAR(100) NOT NULL,    
fecha_alta DATETIME NOT NULL,
sueldo     FLOAT(20,2),
comision   FLOAT(10,2),
CONSTRAINT pk_vendedores  PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
 id          INT(255) AUTO_INCREMENT  NOT NULL,
 vendedor_id INT(255) NOT NULL,
 nombre      VARCHAR(100) NOT NULL,
 ciudad      VARCHAR(100),
 gastado     FLOAT(50,4) NOT NULL,
 fecha       DATETIME,
 CONSTRAINT pk_clientes PRIMARY KEY(id),
 CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id         INT(255) AUTO_INCREMENT NOT NULL,
cliente_id INT(255) NOT NULL,
coche_id   INT(255) NOT NULL,
cantidad   INT(255),
fecha      DATETIME NOT NULL,
CONSTRAINT pk_encargo PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche   FOREIGN KEY(coche_id)   REFERENCES coches(id)
)ENGINE=InnoDB;
SHOW DATABASES;
SHOW TABLES;



#Rellenar todas las tablas#

#COCHES#

INSERT INTO coches VALUES(NULL,'Renault Clio', 'Renault',12000, 11);
INSERT INTO coches VALUES(NULL,'Seat Panda', 'Seat',10000, 13);
INSERT INTO coches VALUES(NULL,'Mercedes Ranchera', 'Mercedez Benz',12000, 13);
INSERT INTO coches VALUES(NULL,'Porche Cayane', 'Porche',13000, 24);
INSERT INTO coches VALUES(NULL,'Lambo Aventador', 'Lambo',14000, 45);
INSERT INTO coches VALUES(NULL,'Ferrari Spider', 'Ferrari',1223000, 56);

#GRUPOS#

INSERT INTO grupos VALUES(NULL, 'Vendedores A','Tabasco');
INSERT INTO grupos VALUES(NULL, 'Vendedores B','California SUR');
INSERT INTO grupos VALUES(NULL, 'Vendedores C','Chiapas');
INSERT INTO grupos VALUES(NULL, 'Vendedores D','Yucatan');
INSERT INTO grupos VALUES(NULL, 'Vendedores E','Quintana roo');
INSERT INTO grupos VALUES(NULL, 'Vendedores F','Veracruz');

#VENDEDORES#
INSERT INTO vendedores VALUES(NULL, 1, null, 'David', 'Lopez', 'Responsable de tienda', NOW(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 3, null, 'Marco', 'Lopez', 'Ayudante de tienda', NOW(),40000, 3);
INSERT INTO vendedores VALUES(NULL, 2, NULL, 'Pedro', 'Lopez', 'Ayudante de tienda', NOW(),403000, 3);
INSERT INTO vendedores VALUES(NULL, 5, null, 'Javier', 'Lopez', 'Ejecutivo de la tienda', NOW(), 405000, 3);
INSERT INTO vendedores VALUES(NULL, 3, null, 'Santiago', 'Lopez', 'Ayudante de tienda', NOW(), 460000, 3);
INSERT INTO vendedores VALUES(NULL, 2, null, 'Alea', 'Smith', 'Mecanico de tienda', NOW(),460000, 3);
INSERT INTO vendedores VALUES(NULL, 5, null, 'Gerardo', 'Perez', 'Responsable de tienda', NOW(),407000, 3);
INSERT INTO vendedores VALUES(NULL, 4, null, 'Monica', 'Almeida', 'Ayudante de tienda', NOW(),430000, 3);
INSERT INTO vendedores VALUES(NULL, 3, null, 'Carlos', 'Lopez', 'Ejecutivo de la tienda', NOW(),407000, 3);


#Cliente#


INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc','Tabasco', 24000, NOW());
INSERT INTO clientes VALUES(NULL, 1, 'Fruteria Antonia Inc','Veracruz', 40000, NOW());
INSERT INTO clientes VALUES(NULL, 1, 'Imprenta Martinez Inc','Oaxaca', 12000, NOW());
INSERT INTO clientes VALUES(NULL, 1, 'Jesus Colchones Inc','Sonora', 26000, NOW());
INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc','Nuevo Leon', 14000, NOW());
INSERT INTO clientes VALUES(NULL, 1, 'Javier PC Inc','Campeche', 1223000, NOW());
#ENCARGOS#
INSERT INTO encargos VALUES(NULL, 1, 1, 2, NOW());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, NOW());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, NOW());
INSERT INTO encargos VALUES(NULL, 4, 4, 2, NOW());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, NOW());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, NOW());