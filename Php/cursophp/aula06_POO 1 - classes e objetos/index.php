<?php

require_once "Caneta.php";

$c1 = new Caneta();
$c1->status = true;
$c1->limite = 1000;
$c1->saldo = 500;
$c1->cpf = '06479780167';


print_r($c1);