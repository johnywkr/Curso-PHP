<?php
require_once 'CaixaDeSom.php';

$c1 = new CaixaDeSom();

$c1->ligar();
$c1->play();
$c1->pause();

$c1->abrirMenu();

print_r($c1);