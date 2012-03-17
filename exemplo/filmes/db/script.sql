create database CatalogoFilmes;

create table filmes (
id integer NOT NULL AUTO_INCREMENT,
titulo varchar(200) not null,
titulo_original varchar(200) not null,
ano varchar(4),
genero varchar(400),
sinopse text,
poster varchar(100)
);

alter table filmes add constraint PK_FILMES primary key (id);

create table usuarios (
id integer NOT NULL AUTO_INCREMENT,
nome varchar(200) not null,
login varchar(100) not null,
senha varchar(100)
);

alter table usuarios add constraint PK_USUARIOS primary key (id);
