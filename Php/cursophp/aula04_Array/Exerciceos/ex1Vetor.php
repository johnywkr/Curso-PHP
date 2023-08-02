EXERCICEO DE VETORES

1 - Entre com os dados de 10 alunos de uma classe, recebendo as informações como nomee uma nota do aluno. 
Armazene estes dados em um vetor. 
Ao final do programa mostrar a média de nota da classe, e o nome do aluno que obteve a maior nota.


DICA: Vá testando cada bloco de codigo e executando pra ver se reamente está retornando corretamente os valores,
antes de ir para  proxima parte do codigo. 


1° foi feito um for , para armazenar os dados dos alunos no vetor $nome e $nota. exemplo abaixo!

for ($i=0; $i <= 2 ; $i++) { 
        $nome[] = readline("Nome do Aluno $i: ");
        $nota[] = readline("Nota do aluno $nome[$i]: ");
    }

teste ok.

2° Mostrar a media de nota da classe e o nome que tiver a maior nota.

a - soma das notas.

$soma = 0;
    for ($i=0; $i <= 2 ; $i++) { 
        $nome[] = readline("Nome do Aluno $i: ");
        $nota[] = readline("Nota do aluno $nome[$i]: ");

        $soma += $nota[$i];
    }

    teste ok.

b - parte de calcular a maior nota. 
    
    $soma = 0;
    $maior - 0;
    for ($i=0; $i <= 2 ; $i++) { 
        $nome[] = readline("Nome do Aluno $i: ");
        $nota[] = readline("Nota do aluno $nome[$i]: ");

        $soma += $nota[$i];
        if($nota[$i] > $maior){
            $maior = $nota[$i];
            $alunoNotaMaior = $aluno[$i];
        }
    }

    echo "O aluno com a maior nota foi $alunoMaiorNota";
    echo "A media geral de notas é: ";

teste ok.

c - parte do codigo da media.

    $soma = 0;
    $maior = 0;
    for ($i=0; $i <= 2 ; $i++) { 
        $nome[] = readline("Nome do Aluno $i: ");
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

   teste ok.


Teste do programa..
<?php

    $soma = 0;
    $maior = 0;
    for ($i=0; $i <= 2 ; $i++) { 
        $nome[] = readline("Nome do Aluno $i: ");
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