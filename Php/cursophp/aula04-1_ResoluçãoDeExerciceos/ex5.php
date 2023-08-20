Faça um programa que vai ler varios numeros e so vai cancelar quando colocar o numero 0.

<?php

$c = 1;

do {                                                //do: é o mesmo que "faça" algo.
    $n = readline("escolha um numero: ");
    $c ++;
} while ($n != 0);
echo "FIM cancelado pelo 0! " ;    