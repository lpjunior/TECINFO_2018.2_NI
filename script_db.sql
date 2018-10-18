/* criar a base de dados */
create database projeto_aula07;

/* selecionar a base */
use projeto_aula07;

/* criar uma tabela */
create table tb_clientes(
  id int primary key auto_increment,
  nome varchar(150) not null,
  email varchar(250) not null unique
);
