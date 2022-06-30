<html>

<?php 
require_once 'Lutador.php';
require_once 'Luta.php';

$l[0] = new Lutador("Victor","Brasileiro",24,1.75,102,10,3,1);
$l[1] = new Lutador("Charles du Bronx","Brasileiro",27,1.78,73,15,2,0);
$l[2] = new Lutador("Justin Gaetjh","Americano",28,1.70,73,13,7,3);
$l[3] = new Lutador("Cain Velazques","Americano",35,1.78,95,25,10,5);


$luta = new Luta();
$luta->marcarLuta($l[1],$l[2]);
$luta->lutar();

$l[1]->apresentar();
$l[2]->apresentar();

?>

</html>