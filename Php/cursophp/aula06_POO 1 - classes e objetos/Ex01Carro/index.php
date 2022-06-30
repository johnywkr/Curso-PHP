

<?php

     require_once 'Carro.php';

     $c1 = new Carro();
    // print_r($c1);       //para verificar variaveis.

    $c1 -> nome = 'fiesta';
    $c1 -> motorista = true;
    $c1 -> fabricante = 'ford';
    $c1 -> cor = "cinza";
    $c1 -> combustivel = 'gasolina';
    $c1 -> ano = '2004';
    $c1 -> pessoas = 5;

    $c2 = new Carro();
    $c2 -> nome = 'gol';
    $c2 -> motorista = false;
    $c2 -> fabricante = 'woksvagem';
    $c2 -> cor = "branco";
    $c2 -> combustivel = 'alcool';
    $c2 -> ano = '2010';

    //print_r($c2); 

   // $c1 -> partida();              // meu metodo partida vai mostrar que o carro esta ligando !
   // $c2 -> partida();

     

  //  $c1 -> abastecer();
  //  $c2 -> abastecer();

     $c1 -> pessoas();





?>