array
<?

$a = array(1,2,3,4,5,6,7,8,9,);
$a[] = 8;

array_push($a,0); // adiciona um item ao final do vetor
echo count($a); // conta quantos elementos tem no vetro
array_pop($a); // exclui a ultima posiçao do vetor
array_shift($a); //exclui a primeira posiçao do vetor
array_unshift($a,1); //adiciona um elemento a primeira posição
rsort($a);
asort($a);

print_r($a);


//mais funçoes no manual do PHP...