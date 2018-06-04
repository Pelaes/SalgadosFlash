create database if not exists Salgados_Flash;

drop database salgados_flash;

use Salgados_Flash;

create table if not exists Clientes (
cod int primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(20) not null,
ddd varchar(2) not null,
telefone varchar(9) not null);

select * from clientes;

create table if not exists Estados(
cod int primary key,
nome varchar(50) not null,
sigla varchar(2));

load data infile 'C:\\Users\\Marcelo\\Desktop\\Base de dados CEP\\estados.cepaberto\\states.csv' into table Estados 
character set utf8
fields terminated by ',';

select * from estados;

drop table estados;

create table if not exists Cidades(
cod int primary key,
nome varchar(100) not null,
estado int not null,
constraint FK_State foreign key (estado) references Estados (cod));

load data infile 'C:\\Users\\Marcelo\\Desktop\\Base de dados CEP\\cidades.cepaberto\\cities.csv' into table Cidades 
character set utf8
fields terminated by ',';

select * from cidades;

drop table cidades;

create table if not exists Enderecos(
cep int primary key,
rua varchar(250) not null,
bairro varchar(150) null,
fk_cidade int,
fk_estado int,
constraint A foreign key (fk_cidade) references Cidades(cod),
constraint B foreign key (fk_estado) references Estados(cod));

SET foreign_key_checks = 1;

load data infile 'C:\\Users\\Marcelo\\Desktop\\Base de dados CEP\\sp.cepaberto_parte_5\\sp.cepaberto_parte_5.csv' into table Enderecos 
character set utf8
fields terminated by ','
enclosed by '"';

select * from enderecos;

drop table enderecos;

SELECT cep, rua, bairro, CID.nome, EST.nome, entrega
                         FROM Enderecos ED 
                         INNER JOIN Cidades CID ON CID.cod = ED.fk_cidade
                         INNER JOIN Estados EST ON EST.cod = ED.fk_estado
                         WHERE cep = 06162072;
                         
ALTER TABLE enderecos ADD entrega boolean DEFAULT false;

update enderecos set entrega=true where cep=06162072;

