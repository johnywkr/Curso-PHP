MELHORANDO O PROGRAMA

<?php

    $soma = 0;
    $maior = 0;
    for ($i=0; $i <= 2 ; $i++) { 
        $nome[] = readline("Nome do Aluno $i: ");
        
    }

    for ($i=0; $i <= 2 ; $i++) { 
        $nota[] = readline("Nota do aluno $nome[$i]: ");

        $soma += $nota[$i];
        if($nota[$i] > $maior){
            $maior = $nota[$i];
            $alunoNotaMaior = $nome[$i];
        }
    }

    $media = $soma / 3;

   echo "O aluno com a maior nota foi $alunoNotaMaior com a nota $maior" . PHP_EOL;
   echo "A media geral de notas é: " . number_format($media,1);