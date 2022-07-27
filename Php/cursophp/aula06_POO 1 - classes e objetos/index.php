<?php

require_once "Caneta.php";

$c1 = new Caneta();
$c1->status = true;
$c1->limite = 1000;
$c1->saldo = 0;
$c1->cpf = '06479780167';

$c1->contaDesativada();
//$c1->contaAtiva();
$c1->deposito(500);
//$c1->sacar(200);

print_r($c1);