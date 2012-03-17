create database CatalogoFilmes;

create table filmes (
id integer NOT NULL AUTO_INCREMENT,
titulo varchar(200) not null,
titulo_original varchar(200) not null,
ano varchar(4),
genero varchar(400),
sinopse text,
poster varchar(100),
primary key (id)
);


create table usuarios (
id integer NOT NULL AUTO_INCREMENT,
nome varchar(200) not null,
login varchar(100) not null,
senha varchar(100),
primary key (id)
);



INSERT INTO filmes (titulo, titulo_original, ano, genero, sinopse, poster)
values ('Os Vingadores', 'The Avengers', 2010, 'Action', 'Homem de Ferro, Capit&atilde;o Am&aacute;rica, Thor, Hulk, etc.', 'avengers.jpg')



insert into usuarios (nome, login, senha)
values ('Marcelo', 'marcelo', md5('12345'))



















