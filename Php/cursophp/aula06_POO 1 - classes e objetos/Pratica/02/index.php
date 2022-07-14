<?php

require_once 'Conta.php';

//criando um novo objeto da class conta

$c1 = new Conta;
$c1->titular = 'johne';
$c1->status = false;
$c1->saldo = 600;
$c1->limite = 1000;
$c1->tipo = 'corrente';

$c1->abrirConta();
//$c1->sacar(800);
$c1->depositar(600);


 //aqui vai mostrar todos os valores que os atributos adquiriram, no meu novo objeto conta!
print_r($c1);