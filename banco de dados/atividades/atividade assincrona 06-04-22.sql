create schema senai;

use senai;

create table senai.pessoas(
	id int not null primary key auto_increment,
    nome varchar(30),
    telefone varchar(15),
    email varchar(30),
    data_de_nascimento date,
    altura varchar (4),
    peso varchar (3)

);

select * from pessoas;

insert senai.pessoas
values 
(default,'johne','81907145','johnywalker@gmail.com','1996-07-15','1.70','65'),
(default,'vanessa','6199876-6543','van@gmail.com','1990-09-02','1.68','72'),
(default,'amanda','6198654-7869','mands@hotmail.com','1992-10-08','1.90','90'),
(default,'ferrnando','6198776-1231','nando@gmail.com','2002-10-02','1.67','105');


alter table pessoas change data_de_nascimento data_de_nascimento char(13);

truncate table senai.pessoas;

drop table pessoas;

alter table pessoas change data_de_nascimento datanasc char(13);

update pessoas set nome='fernando' where id=5;

alter table pessoas add column Cidade varchar(20) ;

SET SQL_SAFE_UPDATES = 0;

update pessoas set Cidade='Taguatinga' ;