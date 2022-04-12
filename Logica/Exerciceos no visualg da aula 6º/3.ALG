Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 05/03/2022
Var
   numeroI, numeroF: inteiro
Inicio
   escreval("Digite um numero inicial")
   leia(numeroI)
   Escreval("Digite um numero final")
   leia(NumeroF)

   // testando se o número final é maior que o inicial
   se numeroF <= numeroI entao
      repita
         Escreval("O numero final deve ser MAIOR que o número inicial. Por favor, Tente novamente.")
         leia(NumeroF)
      ate numeroF > numeroI
   fimse

   // escrevendo os números entre o número inicial e final
   enquanto numeroI <= numeroF faca
      escreval(numeroI)
      numeroI <- numeroI + 1
   fimenquanto
Fimalgoritmo