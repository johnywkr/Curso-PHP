select * from codeny.funcionarios;

select * from funcionarios
where datanasc <  '2001-08-01' and peso < 80 and endereco = 'ceilandia'
order by peso;

select altura,count(altura) from funcionarios
where altura > 1.60 and altura  <= 1.80
group by altura;



select distinct endereco from funcionarios  /* O 'distinct' vai mostra os endereços, sem repetir os que sao iguais. Ex tire o comando e execute para ver a diferença. */
order by endereco; 

select endereco,count(endereco) from funcionarios  /* O cont vai contar quantos endereços tem iguais e o group by tem a msm funçao do distinct. */
group by endereco; 

select * from funcionarios
where altura = 1.70;






select * from cursos;

select cargahora,count(cargahora) from cursos
where cargahora >= 60
group by cargahora ;

select cargahora,count(cargahora) from cursos
where cargahora >= 40
group by cargahora 
having cargahora > (select avg(cargahora) from cursos);   /* having indica onde , lugar -> quanto vai ser a media da carga */

select *from cursos
where cargahora;
 
 select avg(cargahora) from cursos; /* avg vai mostrar a media das cargas . */
 
 select totaulas,count(totaulas) from cursos
 where totaulas > 20				
 group by totaulas ;							/* o comando vai mostar o total de aulas maior que 20 , e o cont vai mostrar quantos cursos tem o total de aulas maior que 20 . */
 
 
 select * from cursos 
 order by ano;
 
 /* selecionei*/   select  ano, count(ano) from cursos		/* selecionei o  ano e a contagem desses da tabela , onde o total de aulas foi maior que 20 agrupado  por ano, mas so mostrei os que tem o ano acima de 2014 atraves do havin */
 /* filtrei */     where totaulas > 20
 /* agrupei */     group by ano
 /* mostrei */     having  ano > 2014;
 
 