use bd ;

select * from alunos;

select * from alunos
where altura > 1.60 and altura < 1.70;  /* vai filtrar todos os alunos que esteja com a altura entre 1.60 e 1.70 . */

select nome,peso from alunos
where peso = 60; 					/* vai selecionar os nomes da tabela alunos pelo peso = ha 60 . */



create table cursos (
	id int not null primary key auto_increment,
    nome varchar(30) unique,
    descricao text,
    carga int unsigned,
    totaulas int unsigned,
    ano year
);

select * from cursos;

insert  cursos (nome, descricao, carga, totaulas, ano)
values

('HTML5', 'Curso de HTML 5',' 40','37','2014'),
('Algoritmos',' Logica de Programação',' 20','15','2014'),
('Photoshop',' Dicas de Photoshop CC',' 10',' 8','2014'),
('PHP',' Curso de PHP para inciantes',' 40','20','2015'),
('Java',' Introdução a linguagem Java',' 40', '29',' 2015'),
('Mysql',' Banco de dados Mysql',' 30','15','2016'),
('Word',' Curso completo de Word',' 40','30','2016'),
('Curso de Python','curso intensivo',' 40','18','2017'),
('POO',' Curso de programação orientada a objeto',' 60','35','2016'),
('Excel','Curso completo de excel','40','30','2017'),
('Responsividade',' Curso de Responsividade',' 30','15','2018'),
('C++',' Curso de C++ orientado a objeto',' 40','25','2017'),
('C#','Curso de C#','30','12','2017'),
('Android','Curso de Desenvolvimento de aplicativos','60','30','2018'),
('JavaScript','curso de Javascript','35','18','2017'),
('PowerPoint','Curso completo de Powerpoint','30','12','2018'),
('Swift','Curso de desenvolvimentos de aplicativos mobile','60','30','2019'),
('Hardware',' Curso de Montagem e configuração','30','12','2018'),
('Redes','Curso de REdes para inciantes','40','15','2016'),
('Seurança','Curso de Segurança','15','8','2018'),
('SEO',' Curso de Otimização de sites','30','12','2017'),
('Premiere',' Curso de edição de videos com Premiere','20','10','2017'),
('AfterEffects',' Curso de Efeitos em Videos com AfterEffects',' 20','10','2018'),
('WordPress',' Criação de sites com Word press','60','30','2019'),
('Joomla',' Criação de sites com Joomla','60','30','2019'),
('Magento',' Curso de criação de lojas virtuais',' 50','25','2019'),
('Modelagem de dados',' Curso de Modelagem de dados','30','12','2020'),
('HTML4',' Curso Basico de HTML versao 4.0',' 20','9','2010'),
('PHP7',' Curso de PHP versao 7.0','40','20','2020'),
('PHP4', 'Curso de PHP versao 4.0',' 30','11','2010');

truncate cursos;

select * from cursos		/* 'like' quer dizer 'se pareça com ' . Entao o comando 'like' quer dizer que os nomes vao ser parecidos com 'p' seguido de qualquer coisa. Qualquer coisa que vem depois 'p' no caso '%' 'p%' .  assim podendo ser php, photoshop etc.*/
where nome like 'p%';		/* obs: o P é só um exemplo , pode ser qualquer letra para buscar outras palavras , */

select * from cursos
where nome like '%a';		/* vai retornar qualquer palavra que tenha a letra 'a' no final */

select * from cursos
where nome like '%ar%';		/* vai retornar qualquer palavra que tenha a letras 'ar' no meio */

select * from cursos
where nome like 'ph%p'; 	/* vai retornar a palavra que tenha 'ph' no começo e 'p' no final . */

select * from cursos
where nome like 'ph%p_';	/* vai retornar a palavra que tenha 'ph' no começo e 'p' no final, e o _ que tenha pelo menos um caracter depois. */

select * from cursos
where nome like 's%t';

select * from cursos
where carga > 30 and totaulas < 40;

select * from cursos
where carga = 40;

select distinct carga from  cursos;

select distinct ano from  cursos
order by ano > 2014;

select count(*) from cursos; 			/* O count vai contar pra mim quantos cursos ha na tabela . */

select count(*) from cursos
where ano > 2014;						/* O count vai contar pra mim quantos cursos ha na tabela depois de 2014. */


select * from alunos;

select max(peso) from alunos;         /* max para saber o valor maximo */

select nome,max(peso) from alunos 				
where peso= (select max(peso) from alunos);			/* vai me retorna o nome e o peso do aluno mais pesado */

select nome,min(peso) from alunos 				
where peso= (select min(peso) from alunos);			/* vai me retorna o nome e o peso do aluno mais leve */

select * from alunos
order by peso;

select sum(peso) from alunos;			/* FUNÇAO somasse */

select avg(peso) from alunos;			/* media aritimetica */

select sum(peso) from alunos
where endereco = 'ceilandia' ;

