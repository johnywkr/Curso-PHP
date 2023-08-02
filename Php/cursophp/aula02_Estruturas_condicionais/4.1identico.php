Usando o operado logico Identico ===

<?php
/* Testando se sao variaveis com valores iguais !  */ 

    $numero = 4;
    $num = "4";

    $r = ($numero == $num) ? "sim" : "nao";

    echo "Sao iguais? " . $r;
    echo "\n";
    
/* Testando se sao variaveis com valores identicos !  */ 

    $numero2 = 4;
    $num2 = "4";

    $r2 = ($numero2 === $num2 ? "sim" : "nao");

    echo "Sao identicos ?" . $r2;