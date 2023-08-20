Faça um contador que conte de onde o usuario quiser até aonde ele quiser.

<?php

$numeroI = readline("Digite o numero para iniciar a contagem: ");
$numeroF = readline("Digite o numero finalizar a contagem: ");

    while ($numeroF > $numeroI) {              //while é enquanto.
        echo "$numeroI ";
        $numeroI++;
    }

    while ($numeroF <= $numeroI) {
        echo "$numeroI ";
        $numeroI--;
    }