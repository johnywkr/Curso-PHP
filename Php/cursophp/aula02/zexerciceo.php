<?php

 /* 1 - Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno durante o semestre. Calcular a sua média (aritmética),
  informar o nome e sua menção aprovado (media >= 7), Reprovado (media <= 5) e Recuperação (media entre 5.1 a 6.9) */

/*  echo "Sistema de Notas";
    echo "\n\n";                // \n serve para pular linhas .

    $n1 = readline("Escreva a primeira nota: ");
    $n2 = readline("Escreva a segunda nota: ");
    $n3 = readline("Escreva a terceira nota: ");

    $media = ($n1 + $n2 + $n3) / 3 ;

    if ($media >= 7){
        echo "aluno aprovado";
    }elseif ($media <= 5){
        echo "Aluno reprovado";
    }else{
        echo "aluno de recuperação";
    }
*/    


// 2 - Escrever um algoritmo que leia dois valores inteiros distintos e informe qual é o maior.
    
/*
    $n1 = readline("Escreva o primeiro numero: ");
    $n2 = readline("Escreva oo segundo numero: ");

    if ($n1 > $n2){
        echo "O primeiro numero, $n1 é maior que o  segundo, $n2";
    }else{
        echo "O primeiro numero, $n2 é maior que o  primeiro, $n1";
    }
*/


/* 3 - Elabore um algoritmo que leia do teclado o sexo de uma pessoa. Se o sexo digitado for M ou F, escrever na tela
“Sexo válido!”. Caso contrário, informar “Sexo inválido!”; */

/*
    $sexo = readline("Escreva a letra que correspondente ao sexo: ");

    if(($sexo == "F" ) || ($sexo == "M")){
        echo "Sexo Valido!";
    }else{
        echo "Sexo Invalido !";
    }
*/     
    

/* 4    Elabore um algoritmo a ler 4 notas de um aluno (de 1 a 10). Após calcular a média das notas,
apresentar a mensagem “Aprovada” se o aluno tiver obtido média maior ou igual a 6, caso contrário, apresentar “Reprovado”. */

/*
    $n1 = readline("Primeira Nota: ");
    $n2 = readline("Segunda Nota: ");
    $n3 = readline("Terceira Nota: ");
    $n4 = readline("Quarta Nota: ");

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    //echo "testando, a é media: $media";

    if($media >= 6){
        echo "-APROVADO-";
    }else{
        echo "-REPROVADO-";
    }
*/



/* 5 - Altere o algoritmo anterior para que seja lido do teclado, além das notas, o sexo do aluno (M ou F). Se for
masculino, o resultado deverá ser precedido de “Caro aluno, seu resultado é: “. Se for feminino, o resultado deverá
ser precedido de “Cara aluna, seu resultado é: “.   */

    $sexo = readline("Diga seu sexo: ");
    $n1 = readline("Primeira Nota: ");
    $n2 = readline("Segunda Nota: ");
    $n3 = readline("Terceira Nota: ");
    $n4 = readline("Quarta Nota: ");

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    //echo "testando, a é media: $media";

    if($media >= 6){
       echo "-APROVADO-";
    }elseif($sexo == "M" ){
       echo "Caro aluno, seu resultado é aprovado!";
    }else{
        echo "Cara aluno, seu resultado é aprovada!";
    }
    
    if($sexo == "F" ){
        echo "Caro aluno, seu resultado é reprovado!";
     }else{
         echo "Cara aluna, seu resultado é reprovada!";
     }









?>