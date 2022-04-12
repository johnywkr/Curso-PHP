create database registros;

use registros;

create table funcionarios(
	id int not null primary key auto_increment,
    nome varchar(30),
    datanasc date not null,
    sexo enum ('M','F'),  			/* enum vai aceitar apenas oo que eu colocar como parametro, no caso 'm','f' */
    altura decimal (3,2),
    peso decimal (5,2),
    ebdereço varchar(40)
);

describe funcionarios;

select * from funcionarios;

insert funcionarios 
values 
(default,'jordania','1999-05-25','F',1.50,56,'ceilandia'),
(default,'valdeison','1986-04-5','M',1.69,68,'taguatinga'),
(default,'calebe','2015-03-29','M',1.10,25,'ceilandia'),
(default,'kelvin','1997-11-30','M',1.68,676,'aguas lindas');


select * from funcionarios;

select nome,altura from funcionarios;

select nome,altura from funcionarios		/* Order by : e para odenar por nome neste caso. */
order by nome desc;							/* O comando desc vai mostra a coluna do maior para o menor , e para mostra do menor para o maior e so remover o desc ! */

select id,nome,altura from funcionarios
order by altura;

select id,nome,peso from funcionarios
order by peso desc;

select id,nome,peso from funcionarios
where peso = 25							/* Para encontrar uma pessoa especifica pelo peso */ 
order by peso desc;

select id,nome,peso from funcionarios
where peso > 25							/* vai buscar as pessoas que tem o peso maior que 25 */ 
order by peso desc;

select id,nome,peso from funcionarios
where peso <= 56 or peso >=70							
order by peso desc;

select * from funcionarios
where peso between 50 and 70  /* vai filtrar as pessoas entre 50 e 70 */
order by nome asc;

select id,nome,peso from funcionarios
where peso <= 56							
order by peso desc;

select id,nome,peso from funcionarios
where peso >= 56 and peso <= 70				/* Vai mostra o peso que estar entre 56 e 70 ordenado por nome. */	
order by peso,nome ;

alter table funcionarios change column ebdereço endereco varchar(30);

select nome, endereco,peso from funcionarios
where endereco = 'ceilandia'  and altura > '1.60' 
order by nome;

select nome, endereco,peso from funcionarios
where endereco = 'ceilandia'  and altura > '1.60' and peso > 56
order by nome;

select nome,sexo from funcionarios;

select nome, peso, endereco from funcionarios
where endereco in('ceilandia','taguatinga')  /* O in vai mostra so o que eu quero que ele liste para mim */
order by nome;