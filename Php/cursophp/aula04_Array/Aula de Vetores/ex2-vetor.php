Formas de criar vetores e atribuir seus valores com arrays
<?php

    //|posso declarar um vetor apenas com a plavra array seguida de  parentesis
    $n = array("voctor" ,"pedro" ,"amanda" ,"thayna");
    $n[] = "mateus"; 
    unset($n[1]);   //Serve para apagar um indice escolhido

    //Posso declarar um vetro apenas colocando os valores entre colchetes
    $a = ["teste",5 , "victor" , true];

    //Posso criar vetores de maneira dinamica
    $d = range(1,20,2);         //-> Irar contar até 20 de dois em dois

    //print_r($d);  //obs print_r usados so nos estudos, para  programas usaramos o foreach


    //Extrutura propria do php para imprimir dados do vetor
    foreach($n as $valor){         //Para cada indice do vetor $n, ele sera adicionadoa a $valor
        echo "$valor";
    }

print_r($n);