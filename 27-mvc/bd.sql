-- CREATE TABLE --
CREATE DATABASE IF NOT EXISTS nota_master;
use nota_master;

CREATE TABLE usuarios(
id        INT(255) auto_increment NOT NULL,
nombre    VARCHAR(100) NOT NULL,
apellidos VARCHAR(100) NOT NULL,
email     VARCHAR(255) NOT NULL,
password  VARCHAR(255) NOT NULL,
fecha     DATE NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE notas(
id             INT(255) AUTO_INCREMENT NOT NULL,  
usuario_id     INT(255)  NOT NULL,
categoria_id   INT(255)  NOT NULL,
titulo         VARCHAR(255),
descripcion    MEDIUMTEXT,
fecha          DATE NOT NULL,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;