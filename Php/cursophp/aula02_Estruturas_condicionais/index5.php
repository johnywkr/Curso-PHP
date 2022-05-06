<?php

    $n1 = readline("informe um numero: ");
    $op = readline("Informe 1 para [+], 2 para [-], 3 para [/] ");
    $n2 = readline("Informe outro numero: ");
    
    switch($op){
        case 1:
            $total = $n1 + $n2;
            break;

        case 2:
            $total = $n1 - $n2;
            break;
        case 3:
            $total = $n1 / $n2;
            break;
        default:
            echo "opcao invalida";
    }

    echo "O resultado da operacao é:  $total";

?>