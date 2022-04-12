Algoritmo "semnome"
//2. Faça um algoritmo que receba 4 notas de um aluno e calcule sua média. Se o aluno
ti//rar media 6 ou mais, ele estará aprovado. Se tirar entre 4 e 5.9, está de recuperação.
Se //tirar menos de 4, estará reprovado.
var
n1, n2, n3, n4, m : real


inicio
// Seção de Comandos
 ESCREVA("digite a primeiira nota: ")
 LEIA(n1)
 ESCREVA("digite a segunda nota: ")
 LEIA(n2)
 ESCREVA("digite a terceira nota: ")
 LEIA(n3)
 ESCREVA("digite a quarta nota: ")
 LEIA(n4)
 m <- (n1 + n2 + n3 + n4) / 4



 SE m <= 4  ENTAO
    ESCREVA("a media do aluno foi: ", m)
    ESCREVAL (" aluno reprovado ")
 FIMSE
 SE m <=  6.9 ENTAO
    ESCREVA("a media do aluno foi: ", m)
    ESCREVAL (" aluno de recuperaçãoo ")
 FIMSE
 SE m >= 7 ENTAO
    ESCREVA("a media do aluno foi: ", m)
    ESCREVAL (" aluno aprovado ")
 FIMSE

fimalgoritmo