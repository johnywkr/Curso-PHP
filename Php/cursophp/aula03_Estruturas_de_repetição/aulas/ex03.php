  

  <?php 

//$numero = -5;

$numero = readline("Digite um numero: ");

if($numero % 2 == 0 && $numero > 0){
    echo "O numero é par e positivo";
}elseif($numero % 2 == 0 && $numero < 0){
    echo "O numero é par e negativo";

}elseif($numero % 2 != 0 and $numero > 0){
    echo "O numero é impar e positivo";
}else{
    echo "O numero é impar e negativo";
}