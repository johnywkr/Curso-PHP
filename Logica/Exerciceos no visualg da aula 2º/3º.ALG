Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 22/02/2022
var
   altura, peso, imc : real
inicio
   escreva ("Informe sua altura(em metros)........:")
   leia (altura)
   escreva ("Informe seu peso(em Kg)..........:")
   leia (peso)

   imc := peso/(altura * altura)

   se (imc < 18.5) entao
      escreva ("----ABAIXO DO PESO-----")
   senao
      se ((imc >= 18.5) e (imc <= 24.99)) entao
         escreva ("----PESO NORMAL-----")
      senao
         se ((imc > 25) e (imc <= 30)) entao
            escreva ("----ACIMA DO PESO -----")
         senao
            escreva ("------OBESO-------")
         fimse
      fimse
   fimse
Fimalgoritmo