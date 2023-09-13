Aprendendo Funçoes do PHP
<?

$produto = "Cafe";
$preco = 4.5;
$mercado = "Tatico";

echo "O produto é $produto e o preço é " . number_format($preco,2 ). "\n";

//Tambem pode ser escrito de outra forma com printf, LEIA ABAIXO:

printf("O %s custa %.2f no Supermercado %s",$produto,$preco,$mercado);          
// $s busca o valor string e $f busca o valor float.
// Obs: O .2 entre a % e o f -> "%.2F" ta dizendo pra formatar o float com duas casas depois da virgula.

/*
%d = Recupera um dado inteiro positivo e negativo.
%u = Recupera um dado inteiro positivo.
%f = Recupera um dado float.
%s = Recupera uma string.
*/

//aula parou min 12:45