create schema bd;
use bd;

create table alunos (
	id int not null primary key auto_increment,
    nome varchar(30),
    datanasc date not null,
    sexo enum ('M','F'),
    altura decimal (3,2),
    peso decimal (3,2),
    endereco varchar(40)
);

select * from alunos;

insert alunos
values 
(default,'johne','1996-07-15','M','1.70','65','ceilandia'),
(default,'victor','1992-10-5','F','1.69','60','taguatinga'),
(default,'luna','2000-12-15','M','1.83','90','samambaia'),
(default,'luucianoo','1993-02-29','F','1.30','45','gama'),
(default,'claudio','2008-3-3','M','1.50','55','sobradinho'),
(default,'thayna','2003-11-29','F','1.65','65','ceilandia'),
(default,'kelvin','1991-07-22','M','1.98','85','aguas lindas'),
(default,'mateus','1994-08-8','M','1.82','65','sol nascente');

alter table alunos modify column peso decimal (4,2);

truncate alunos;

select nome,datanasc from alunos
where datanasc > '2005-01-01' and datanasc < '2010-01-01';

select nome,peso from alunos
where endereco = 'ceilandia' and sexo = 'F';

select nome from alunos
order by nome desc;

select nome,altura from alunos
where altura >= 1.76 ;

select nome,altura,peso from alunos
where peso >= 60 ;
