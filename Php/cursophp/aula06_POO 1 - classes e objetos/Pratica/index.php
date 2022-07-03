<?php 

require_once 'Caneta.php';

$c1 = new Caneta();
$c1->cor = 'red';
$c1->fabricante = 'Faber Castel';
$c1->tampada = true;
$c1->ponta = '0.7';


$c2 = new Caneta();
$c2->cor = 'Vermelha';
$c2->fabricante = 'BIC';
$c2->tampada = true;
$c2->ponta = '0.5';


$c1->destampar();   //se comentar essa linha nao poderar escrever pois nao vai estar chamando a função destampar para poder escrever!
$c1->escrever();


print_r($c1);