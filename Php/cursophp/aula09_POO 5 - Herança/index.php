<?php

require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'bolsista.php';
require_once 'jogador.php';

$a1 = new Aluno('johne',"M",25);
$a1->pagarMensalidade();


$ab1 = new bolsista('thayna','F',21);
$ab1->pagarMensalidade();


//$p1 = new professor();

$j1 = new jogador('neymar','M',30);
$j1->posicaoJogador('atacante');

print_r($j1);