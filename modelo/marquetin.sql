create database diseño

create table diagnosticos(
id_diagnostico int not null AUTO_INCREMENT,
nombre_clinica varchar(25),
ventaja1 varchar(25),
ventaja2 TEXT(550),
desventaja1 varchar(25),
desventaja2 TEXT(550),
PRIMARY KEY(id_diagnostico)
)engine innodb;

create table personales(
id_personal int not null AUTO_INCREMENT,
nombre varchar(25),
apellidop varchar(25),
apellidom varchar(25),
fecha_nacimiento date,
ci varchar(25),
celular int(25),
direccion varchar(50),
cargo varchar(50),
PRIMARY key(id_personal)
)engine innodb;

create table categorias_trabajos(
    id_categoria_trabajo int not null AUTO_INCREMENT,
    nombre varchar(25),
    tipo varchar(25),
    detalle varchar(25),
    precio float(10.2),
    PRIMARY key (id_categoria_trabajo)
)engine innodb;

create table trabajos_precios(
id_trabajo_precio int not null AUTO_INCREMENT,
id_categoria int,
id_usuario int,
PRIMARY KEY (id_trabajo_precio)
)engine innodb;

create table precios_publicidades(
id_precio_publicidad int not null AUTO_INCREMENT,
nombre varchar(25),
precio float(10.2), 
PRIMARY key(id_precio_publicidad)
)engine innodb;


