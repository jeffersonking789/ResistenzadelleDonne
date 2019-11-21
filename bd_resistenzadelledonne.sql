create database resistenzadelledonne
default character set utf8
default collate utf8_general_ci;

use resistenzadelledonne;

create table contato(
	id_contato int primary key auto_increment,
    nome_contato varchar (100),
    email_contato varchar(100),
    mensagem text
);

select *from contato;