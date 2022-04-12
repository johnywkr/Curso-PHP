Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/02/2022

const
  vPercDistribuidor = 29;
  vPercImpostos = 47;

var
  vCustoFabrica, vValorDistribuidor, vValorImposto, vCustoConsumidor : Real

inicio
  // fazendo a leitura
  Escreva(" Informe o valor de custo de fábrica: ")
  Leia(vCustoFabrica)

  // calculando os custos
  vValorDistribuidor <- vCustoFabrica + (vCustoFabrica * vPercDistribuidor / 100)

  vValorImposto <- vCustoFabrica + (vCustoFabrica * vPercImpostos / 100)

  vCustoConsumidor <- vCustoFabrica + vValorDistribuidor + vValorImposto

  // exibindo para o usuário
  Escreva("O custo ao consumidor é: ", vCustoConsumidor)



Fimalgoritmo