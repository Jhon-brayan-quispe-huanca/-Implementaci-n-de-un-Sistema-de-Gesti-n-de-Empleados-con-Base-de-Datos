CREATE DATABASE crud;
use crud;

CREATE table empleado(
    id int(11) not null auto_incement,
    nombre varchar(40) not null,
    edad int(12) not null,
    primary key(id),
)