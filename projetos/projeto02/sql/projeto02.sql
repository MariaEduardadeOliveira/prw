-- drop database projeto02;

create database projeto02;

use projeto02;

create table usuario(
id_usuario int not null auto_increment,
nome_usuario varchar(100) not null,
email_usuario varchar(100) not null,
fone_usuario varchar(100) not null,

primary key (id_usuario));

use projeto02;

insert into usuario (nome_usuario, email_usuario, fone_usuario)
values ('Maria','maria1@gmail.com','99742-7154');

select * from usuario;

-- delete from usuario where id_usuario=""; 

-- truncate usuario;