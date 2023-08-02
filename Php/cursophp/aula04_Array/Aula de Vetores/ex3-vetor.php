<?php
//Posso atribuir um valor a uma chave personalizada com o nome que quiser.

    $v = array("nome" => "victor",
               "idade" => 26,
                "peso" => 65

);
$v["fuma"] = true;
unset($v["fuma"]);

//print_r($v);



foreach ($v as $indice => $valor) {
    echo "O valor de $indice é $valor" . PHP_EOL;
}