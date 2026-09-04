create database if not exists crudmaterias;
use crudmaterias;

create table estados(
    estado_id int primary key,
    nombre_estado varchar(100)
);

create table materias(
    materia_id int auto_increment primary key,
    nombre varchar(100) not null,
    anio int not null,
    cuatrimestre varchar(50) not null,
    activo boolean not null default true,
    estado_id int,
    foreign key (estado_id) references estados(estado_id)
);

insert into estados(estado_id,nombre_estado) values 
    (1,'Finalizada'),
    (2,'Regular'),
    (3,'Libre'),
    (4,'Cursando');

insert into materias(nombre,anio,cuatrimestre,estado_id) values ("elemento de programacion",1,"primero",1);    