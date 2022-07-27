<?php 
require_once 'Conta.php';

$c1 = new Conta();
$c1->titular ="johne";
$c1->saldo = 1000;

//print_r($c1);

var_export($c1);