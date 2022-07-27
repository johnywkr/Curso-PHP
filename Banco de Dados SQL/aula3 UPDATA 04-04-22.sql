create database vitec;

use vitec;

create table  cursos (
	id int primary key not null auto_increment,
    nome varchar(30),
    descriçao text,
    totaulas int unsigned,
    horas int unsigned,
    ano year
);

select * from cursos;

alter table cursos add column nivel int unsigned after horas;  /* after : depois de horas */

alter table cursos drop column nivel;	/* drop : apaga a coluna */

describe cursos; /* descreve o conteudo da tabela */

alter table cursos modify column nome varchar(50) unique not null; /* modify para modificar algo na coluna , no caso o varchar de 30 para 50 . */

alter table cursos change column id id_curso int; /* change : altera o nome */

alter table cursosD rename cursos; /* rename alter o nome da tabela */

insert cursos 
values 
(default,'HTML4','Curso de HTML5','40','37','2014'),
(default,'HTML4','Curso de HTML5','40','37','2014'),
(default,'HTML4','Curso de HTML5','40','37','2014');

drop table cursos;

update cursos set nome='HTML5' where id='1'; /* altera o nome do id 1 */

update cursos set nome='PHP' , ano= '2015' , totaulas='60' , horas='120' where id='4'; /* faz varias alteraçoes na msm linha */

update cursos set ano='2050', horas='800' where ano='2014'; /* vai alterar as horas e o ano nas linhas que tiverem o ano 2014 */

update cursos set ano='2018' , horas ='8' where ano='2050' limit 1; /* o limit determina um limite de linha para ser alterada, msm havendo outras linhas com o ano 2050 ele so vai alterar a primeira que foi ate aonde o limit determinou. */

delete from cursos where id='2'; /* esse comando vai apagar a linha do id */

delete from cursos where ano='2050'; /* esse comando vai apagar todas as linhas que tiverem  o ano igual */

delete from cursos ; /* apaga os registros da tabela */

truncate /* libera espaço no disco o delete so apaga da tabela */




