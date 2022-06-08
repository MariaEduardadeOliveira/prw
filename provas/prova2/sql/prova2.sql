-- drop database prova2;

create database prova2;

use prova2;

drop table if exists fluxo_caixa;

create table fluxo_caixa(
id int not null auto_increment,
data date not null,
tipo varchar(10) not null,
valor decimal(10, 2) not null,
historico varchar(150) not null,
cheque varchar(3) not null,

primary key (id));

select * from fluxo_caixa;

-- delete from fluxo_caixa where id=""; 

-- truncate fluxo_caixa;