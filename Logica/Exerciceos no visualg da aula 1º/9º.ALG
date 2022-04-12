Algoritmo "semnome"
//9 - Uma empresa de desenvolvimento de softwares paga a seu vendedor um fixo de R$500  por mês, mais um bônus de R$50 por sistema vendido.  Faça um algoritmo que leia quantos softwares o funcionário vendeu e determine o salário total do funcionário. Mostre as informações que você achar necessário.






Var

   salario_fixo, comissao, venda, salario_total : Real

Inicio
      escreval("valor totas de vendas de software : ")
      leia (venda)

      salario_fixo <- 500
      comissao <- venda * 50
      salario_total <- salario_fixo + comissao

       escreval("O seu salário total é de : ", salario_total)
        escreval("Seu total de vendas foi de : ", venda)
         escreval("Sua comissão foi de : ", comissao)

      


Fimalgoritmo