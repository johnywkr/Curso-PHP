<?

require_once "Caneta.php";

$c1 = new Caneta();
$c1->cor = "azul";
$c1->marca = "bic";
$c1->tampada = true;
$c1->ambiente = "escolar";

$c2 = new Caneta();
$c2->cor = "vermelha";
$c2->marca = "compacto";
$c2->tampada = false;
$c2->ambiente = "faculdade";

print_r($c2);