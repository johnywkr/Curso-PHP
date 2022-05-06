

<?php

    $numero = readline("Informe um numero: ");

    //Para fazer as realaçoes, precisamos usar os operadores relacionais.
    // < , > , <= , => , == , === (Para ser identico , deve ser o mesmo valor e o mesmo tipo primitivo).

    if($numero % 2 == 0) {
        echo "O numero $numero é par";

    }else{
        echo "O numero $numero é impar";
    }


?>