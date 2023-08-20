Faça um programa onde, quando o usuario informar um numero, se for positivo multiplica por x3.
Se for negativo multiplica por x2.

<?php

$numero = readline("Informe um numero: \n");

if ($numero > 0) {
    $numero = $numero * 3;
    echo "Numero $numero é Positivo e o resultado da operação é $numero";

}else{
    $numero *= 2;
    echo "Numero $numero é Negativo e o resultado da operação é $numero";
}