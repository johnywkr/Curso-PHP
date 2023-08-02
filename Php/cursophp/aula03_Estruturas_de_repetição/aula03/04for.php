

<?php 
$soma = 0;
for ($i=1; $i <= 4 ; $i++) { 
    $nota = readline("Informe a nota $i: ");
    $soma += $nota;
}

$media = $soma / 4;

echo "A media é: " . number_format($media,2). PHP_EOL;

echo "A data de hoje é: ". date("D/M/Y");
echo "A palavra Victor tem ". strlen("Victor"). " letras";