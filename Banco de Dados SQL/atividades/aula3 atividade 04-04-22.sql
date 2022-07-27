create schema atividade; 

use atividade;

create table tabela1 (
	id int not null primary key auto_increment,
    nome varchar(30),
    idade int,
    peso int,
    altura int
);

select * from tabela1;

insert tabela1
values 
(default,'gabriel','27','69','1.80'),
(default,'joelma','15','55','1.60'),
(default,'jobson','35','95','1.70'),
(default,'otavio','25','100','2.00'),
(default,'victor','32','75','1.78'),
(default,'thayna','22','75','1.69'),
(default,'tiago','18','55','1.80'),
(default,'cleber','50','78','1.90'),
(default,'enilda','43','45','1.60');

alter table tabela1 modify column altura varchar(4);

update tabela1 set altura= '1.70' where id='1';

update tabela1 set nome = upper(nome);

create table tabela2(
	id int not null  primary key auto_increment,
    jogos varchar(30),
    marca varchar(30),
    favoritos text,
    ano int
);

select * from tabela2;

insert tabela2
values (default,'mario','nintendo','passar de fase','1990'),
(default,'top gear','nintendo','corrida','1992'),
(default,'god of war','sony','passar de fase','2002'),
(default,'futebol','pes','disputa','2013'),
(default,'the king of fight','neo geo','luta','2002'),
(default,'mario','nintendo','passar de fase','1990'),
(default,'mario','nintendo','passar de fase','1990'),
(default,'mario','nintendo','passar de fase','1990'),
(default,'mario','nintendo','passar de fase','1990'),
(default,'mario','nintendo','passar de fase','1990');

update tabela2 set jogos='donkey kong', ano='1991' where id='6';

alter table tabela2 change column favoritos tipo text;

update tabela2 set ano='0000' where ano='1990';