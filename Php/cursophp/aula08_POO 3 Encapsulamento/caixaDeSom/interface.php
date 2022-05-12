

<?php    

// Na interface todos os metodos sao abstratos .
// nao vou implementar nenhum codigo na interface , so a chamada pra utilizar ele.
// exemplo pra chamada: um botao de ligar um controle.. isso é a chamada da funcao ligar .

interface Controlador{
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();

}