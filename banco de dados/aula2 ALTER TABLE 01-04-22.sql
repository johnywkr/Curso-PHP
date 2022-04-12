create schema codeny;

/* show databases ; */

use codeny ;

/*create table codeny.professor -> pode ser usado quando a varias tadabase! */

create table professor(
	id_professor int not null primary key auto_increment,
	nome VARCHAR(40) not null,
    sexo enum('M','F'),
    telefone varchar(15),
    email varchar(40) not null,
    data_nasc  date  not null,
    especialidade varchar(40)
);

insert professor
(nome,sexo,endereço,tel,email,data_nasc,especialidade)
values
('marcela','M','ch114','6199998888','meuemail@gmail.com','1996-07-15','PHP');


select * from professor;

ALTER TABLE professor CHANGE data_nasc data_nasc CHAR(13);
/* Comando acima usado para solucionar o problema  que no momento a sua data_nasc definiu como CHAR(1)deveria ser CHAR(13).

Para corrigir isso, basta emitir este comando acima para alterar o comprimento das suas colunas de 1 para 13.*/

alter table professor add column endereço varchar(30) after telefone;   

/* comando acima usado para adicionar uma coluna 'endereço' na tabela. E o after para colocar depois de telefone na tabela.*/

alter table professor drop column endereço;
/* O drop column vai apagar a coluna endereço. */

alter table professor modify column endereço varchar(40) first;
/* a coluna endereço vai aparecer em primeiro na tabela .*/

alter table professor modify column endereço varchar(40) after sexo;
/* o comando acima vai mudar de lugar a coluna endereço para a frente de sexo*/

alter table professor change telefone tel varchar(16);
/* o comando change altera o nome da coluna , no caso de telefone para tel. */



create table codeny.cursos(
	nome varchar(20) not null unique,
    descricao text,
    cargahora int unsigned,  /* O unsigned é para que o valor inserido nao seja menor que zero*/
    totaulas int unsigned,
    ano year default '2022' /* O default serve para se o usuario não informa o ano, automaticamente sera 2022. */ 
);

select * from cursos;

alter table codeny.cursos add column id_curso  int first;
  /* Para aleterar a coluna */
alter table cursos add primary key (id_curso); 
  /* para adicionar a chave primaria */
alter table cursos modify column id_curso int auto_increment not null;
  /* para modificar a coluna */
desc cursos;
  /* Comando acima serve para descrever os campos da tabela */
  
insert codeny.cursos
values 
(default,'Front end','Intermediario','60','20',2017),
(default,'Java Script','Basico','60','20','2019'),
(default,'Python','Manipulando o DOM','300',60,default);

alter table cursos modify column ano int default '2022' after totaulas;
/* nesse caso aqui o modify eu usei para voltar aos valores que foram inseridos na tabela antes de alterar a coluna para nao da erro */

truncate codeny.alunos;
/* apaga a tabela */


create table codeny.alunos(
	id_alunos int primary key not null auto_increment,
    nome varchar(30) not null,
    endereco varchar(20) not null,
    cursomatri varchar(20) not null,
    datanasc date 
);

select * from alunos;

insert codeny.alunos
values (default,"johne","cha 114","php",2022-02-10); 
