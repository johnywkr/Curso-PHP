Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/02/2022

Var qtp, qpp, vap, tp, sd : real
inicio
   escreva ("Insira a quantidade total de prestações")
   leia(qtp)
   escreva ("Insira a quantidade de prestações pagas")
   leia(qpp)
   escreva ("Entre com o valor atual das prestações")
   leia(vap)
   tp <- (qtp – qpp)*vap
   sd <- (qpp - qtp)*vap
   escreval ("Você já pagou ", tp)
   escreval("Seu saldo devedor é",sd)



Fimalgoritmo