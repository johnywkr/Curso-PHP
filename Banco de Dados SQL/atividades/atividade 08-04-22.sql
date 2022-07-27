

select * from alunos;

rename table funcionarios to alunos;	/* para renomear a tabela  ou poderia ser alter no lugar de rename*/

select datanasc from alunos				/* Vai mostrar Quantos alunos e quantas alunas nasceram depois de 21/07/2001. */
where datanasc >= '2001-07-01';

select nome,peso from alunos
where peso > 70 and  (select avg(peso) from alunos);

select nome,altura,peso from alunos
where altura > 1.78 and peso > 60 		/* Uma lista agrupada que mostre quantos homens tem acima de 1.78. Mostre apenas os que pesem acima de 60. */
group by nome ;


select * from cursos;

select nome,cargahora,totaulas from cursos		/* cursos acima de 40 horas que tem mais de 20 aulas */ 
where cargahora > 40 and totaulas > 20;

