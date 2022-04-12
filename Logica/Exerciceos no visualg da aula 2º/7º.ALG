algoritmo "ff"

var

   valor, desconto, parcela, comissao: real

inicio

   escreva ("Informe o valor total: ")
   leia(valor)
   desconto <- valor-(valor*0.10)
   escreval ("Valor com desconto: R$",desconto)
   parcela <- valor/3
   escreval ("Valor da parcela: R$",parcela)
   comissao <- desconto*0.05
   escreval ("Comissão à vista: R$",comissao)
   comissao <-valor*0.05
   escreval ("Comissão à prazo: R$",comissao)

fimalgoritmo