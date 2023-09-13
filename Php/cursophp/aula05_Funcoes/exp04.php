<?

$f = "Aprendendo a programar php";

$a = str_word_count($f,0);          /* Com o segundo parametro 0 ele apenas conta quantas PALAVRAS tem na string. Com
o parametro 1 ele cria um vetor e armazena cada palavra em uma posiçao e com o 2 ele cria um vetor com as posiçoes sendo 
baseadas na quantidade de caracteres das palavras.*/

$a = str_word_count($f,2);          // 1 em array e 2 vetor

//echo $a;

print_r($a);