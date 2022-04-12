Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/02/2022

var
   p1, p2, p3, nf : real

inicio
   escreva ("Digite o valor da 1° prova")
   leia(p1)
   escreva ("Digite o valor da 2° prova ")
   leia(p2)
   escreva ("Digite o valor da 3° prova")
   leia(p3)
   p1 <- (p1*2)/10
   p2 <-  (p2*3)/10
   p3 <- (p3*5)/10
   nf <- p1+p2+p3
   escreval (" A media final é" ,nf)



Fimalgoritmo