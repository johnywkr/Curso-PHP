<?php

    //Operadores Lógicos: E, Ou, Nao
    //Respectivamente: (and , &&) (or, ||), !

$media = readline("Informar a media: ");

if ($media < 3) {
    echo "aprovado";

} elseif ($media < 6) {   
    echo "recuperação";
    
} else {
    echo "esta aprovado";
}


// Outra forma de se fazer !
$media = readline("Informe a media: ");

    if($media < 3){
        echo "Esta reprovado";
    }elseif($media >= 3 && $media < 6){
            echo "Esta de recuperaçao";
    }
    else{
            echo "Esta aprovado";
        }
    
?>