<?

$f = "Aprendendo a programar php";

$a = str_word_count($f,0);    

$e = explode("aprendendo",$f); // Gerar um vetor atraves de um parametro que pode ser um espaço em branco ou até mesmo letra.     
$i = implode(" ",$e);           //Gerar uma sequencia de strings com os valores do vetor 

print_r($e);