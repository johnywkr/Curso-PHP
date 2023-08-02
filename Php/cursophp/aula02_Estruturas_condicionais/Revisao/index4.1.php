Operadores Logicos
obs:Tire os comentarios para testar cada forma de cada vez para não dar erro.


 <?php

    $media = readline("Informe a nota do aluno: ");

//1°
/*   
    if($media < 3){
        echo "Está REPROVADO";
    }else{
        if($media < 6){
            echo "Esta de RECUPERAÇÃO";
        }
        else{
            echo "APROVADO";
        }
    }
*/

//2° OUTRA FORMA DE FAZER USANDO elseif

/*
if($media < 3){
    echo "Está REPROVADO";
}elseif($media < 6){
        echo "Esta de RECUPERAÇÃO";
    }
    else{
        echo "APROVADO";
    }

*/

//3° forma de se fazer .

/*Com operadores logicos: E, OU, Nao 
sendo E -> and,&&
      Ou -> or, || 
      nao -> !
*/

if($media < 3){
    echo "REPROVADO";
}elseif($media >=3 and $media <6){
    echo "RECUPERAÇÃO";
}else{
    echo "APROVADO";
}