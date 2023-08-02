OPERADOR TERNARIO
- serve para fazer extruturas condicionais simples.

<?php

$media = readline("Informe a media: ");

/*$situacao = $media >=6 ? "Aprovado" : "Reprovado";

echo "Esta $situacao com media $media";*/

//Podemos usar a concatenação abaixo:

echo "O aluno esta " . ($media >=6 ? "Aprovado" : "Reprovado");

?>


