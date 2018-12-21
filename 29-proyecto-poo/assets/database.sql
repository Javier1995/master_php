CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
id              int(255) AUTO_INCREMENT NOT NULL,
nombre          varchar(100) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', null);

CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Manga corta');
INSERT INTO categorias VALUES(null, 'Tirantes');
INSERT INTO categorias VALUES(null, 'Manga larga');
INSERT INTO categorias VALUES(null, 'Sudaderas');

CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255),
nombre          varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
stock           int(255) not null,
oferta          varchar(2),
fecha           date not null,
imagen          varchar(255),
CONSTRAINT pk_categorias PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE SET NULL ON UPDATE CASCADE
)ENGINE=InnoDb;


CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255),
producto_id     int(255),
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id) ON DELETE SET NULL ON UPDATE CASCADE,
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id) ON DELETE SET NULL ON UPDATE CASCADE
)ENGINE=InnoDb;




