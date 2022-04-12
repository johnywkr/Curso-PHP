Algoritmo "semnome"

var
   peso : inteiro
   planeta : inteiro
   total : real

inicio


   peso <- 0
   planeta <- 0
   total <- 0


   escreval(" Programa peso em outro planeta ")
   escreval(" Digite o peso: ")
   leia(peso)
   escreval("1 – Mercúrio")
   escreval("2 – Vênus")
   escreval("3 – Marte")
   escreval("4 – Júpiter")
   escreval("5 – Saturno")
   escreval("6 – Urano")
   escreval("Digite o número do planeta")
   leia(planeta)
   escolha(planeta)
   caso 1
      total <- (peso * 0.37)/10
      escreval("O seu peso é no planeta Mercúrio é ", total, " Kg")
   caso 2
      total <- (peso * 0.88)/10
      escreval("O seu peso é no planeta Vênus é ", total, " Kg")
   caso 3
      total <- (peso * 0.38)/10
      escreval("O seu peso é no planeta Marte é ", total, " Kg")
   caso 4
      total <- (peso * 2.64)/10
      escreval("O seu peso é no planeta Júpiter é ", total, " Kg")
   caso 5
      total <- (peso * 1.15)/10
      escreval("O seu peso é no planeta Saturno é “, total, " Kg")
   caso 6
      total <- (peso * 1.17)/10
      escreval("O seu peso é no planeta Urano é ", total, " Kg")
   outrocaso
      escreval("Planeta Inválido.")
   fimescolha
fimalgoritmo