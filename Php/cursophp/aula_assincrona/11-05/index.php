<?php

require_once 'Cliente.php';

$c1 = new cliente($nome,$idade,$sexo);
$c1->setNome('johne');

$l1 = new livro();


print_r($c1);