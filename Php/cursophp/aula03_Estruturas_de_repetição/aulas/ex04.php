


    <?php 

$numero1 = readline("Informe o numerador: ");
$numero2 = readline("Informe o denominador: ");
$operacao = readline("Qual operaçao deseja fazer: 
+ - Adiçao 
- - Subtracao 
 x - Multiplicaçao 
 / - Divisao");

switch ($operacao) {
    case '+':
        $res = $numero1 + $numero2;
        echo "O resultado da Soma é: $res";
        break;

    case '-':
        $res = $numero1 - $numero2;
        echo "O resultado da Subtracao é: $res";
        break;

    case 'x':
        $res = $numero1 * $numero2;
        echo "O resultado da Multiplicacao é: $res";
        break;

    case '/':
        $res = $numero1 / $numero2;
        echo "O resultado da Divisao é: $res";
        break;
    
    default:
        echo "Informe um valor valido";
        break;
}