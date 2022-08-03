<?php 
require_once 'Conta.php';

$c1 = new Conta();
//$c1->titular ="johne";
//$c1->saldo = 1000;
$c1->setSaldo(1000);
$c1->setTitular('johne');
$c1->setTipo('cc');
$c1->setLimite(1200);
$c1->setStatus(false);


$c1->setStatus(true);
$c1->sacar(500);
print_r($c1);

//var_export($c1);