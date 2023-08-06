CONTADOR DE 1 A 10 E AO FINAL A SOMA DE TODOS OS VALORES

<?php

    $c = 1;                                         //-> O contador pode começar com o valor que eu quiser, por isso ele foi declarado em uma variavel acima começando com 1.

    while ($c <= 10) {                              //-> Contador
        $n = readline("Informe os numeros: ");
        $c ++;
        $soma += $n;                                //-> É o mesmo que $soma = $soma + $n; operador de atribuição.
    }


    print_r("A soma dos numeros sera: $soma");