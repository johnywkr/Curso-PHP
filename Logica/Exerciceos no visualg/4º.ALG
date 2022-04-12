Algoritmo "semnome"
// 4 - Faça um algoritmo que lê uma temperatura em Fahrenheit e calcula a temperatura correspondente em Celsius. Ao final o programa deve exibir as duas temperaturas. – Usar a fórmula: C = (5 * (F-32) / 9)



Var
   f, c : real

Inicio
      escreva ("Temperatura em Fahrenheit: ")
      leia (f)
      c <- (f - 32) / 1.8
      
      escreval ("Temperatura em celsius : ", c:4:1)


Fimalgoritmo