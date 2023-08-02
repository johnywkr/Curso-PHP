<?php

$numero = readline("Digite um numero: ");

if($numero % 2 == 0 && $numero > 0){
    echo "Numero Par e positivo";
}elseif($numero % 2 == 0 && $numero < 0){
    echo "Numero par e negativo";
}elseif($numero % 2 != 0 and $numero > 0){
    echo "numero impar e positivo";
}else{
    echo "numero impar e negativo";
}