Faça um algoritimo que tenha 3 opções:
1 - para contar de 1 a 10
2 - para contar de 10 a 1
3 - sair 

<?php

while ($opcao != 3) {
    popen('cls', 'w');
    echo "Escolhas uma opção: \n";
    echo "1 - Para contar de 1 - 10\n";
    echo "2 - Para contar de 10 - 1\n";
    echo "3 - Sair\n";

    $opcao = readline("opção: ");           //AQUI FAZ A LEITURA DO MENU, PARA ESCOLHER A OPÇAO A SER REALIZADA.

    switch ($opcao) {
        case '1':
            for ($i=1; $i <=10 ; $i++) { 
                echo "$i ";
            }
            readline("");                  //Serve pro programa ficar parado na tela esperando um caractere para retorna ao menu de opção, sendo assim deixando-uo recursivo 
            break;

        case '2':
            for ($i=10; $i >=1 ; $i--) { 
                echo "$i ";
            }
            readline("");
            break;
        case '3':
            popen('cls','w');               //limpa o que tiver na tela 
            break;    
        default:
            echo "Digite uma opção valida.";
            readline("");
            break;
    }
}