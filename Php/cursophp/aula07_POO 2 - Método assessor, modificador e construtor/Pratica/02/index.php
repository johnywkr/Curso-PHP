<?php 
require_once 'Conta.php';

$c1 = new Conta('JOHNE','Poupança');

$c1->depositar(500);
$c1->extrato();


//print_r($c1);

