

<?php 
$soma = 0;

for ($i=1; $i <=4 ; $i++) { 
$nota = readline("Informe a nota $i: ");

$soma += $nota;                         //Atribuição com adição (+=)

}

$media = $soma / 4;

//echo "A media é: $media";

echo "A media é: " . number_format($media,2). PHP_EOL; //Essa formula serve para formatar a saida da media ..

echo "A data de hoje é: " . date("d/M/Y"). PHP_EOL; 

echo "A palavra johne tem: " . strlen("johne"). " letras";
