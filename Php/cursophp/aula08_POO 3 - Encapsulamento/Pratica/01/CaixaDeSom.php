<?php
require_once 'Interface.php';

class CaixaDeSom implements Controlador{
    //ATRIBUTOS
    private $volume;
    private $ligado;
    private $tocando;

    
    //Os METODOS serao privados , pq atraves da interface sera chamada a função que esta privada para ser executada .
    //OBS: NÃO É TODO CASO QUE PRECISA SER PRIVADO A FUNCTION.

    private function getVolume()
    {
        return $this->volume;  //lembrando, o get so retorna o que ja ta nele...
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;    //lembrando, set envia um novo valor..
    }


    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
    }


    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }


    //metodo construtor 
    //Obs: O __construct pode ser substituido pelo nome da class

    function CaixaDeSom(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }


    //sobreescrevendo a Interface

    function ligar(){
        $this->setLigado(true);
    }

    function desligar(){
        $this->setLigado(false);
    }

    function abrirMenu(){
        if($this->getLigado()){
            echo "Esta tocando: " , $this->getTocando() ? "Sim" : "Nao" , PHP_EOL;
            echo "Volume: " . $this->getVolume() .PHP_EOL;
            for($c = 1 ; $c <= $this->getVolume(); $c+=10){
                echo "|";
            }
        }else{
            echo " A caixa de som esta desligada";
        }
    }

    function fecharMenu(){
        if($this->getLigado()){
            echo "tocando musica";
        }else{
            echo "Caixa desligada!";
        }
        
    }

    function maisVol(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }else{
            
        }
    }

    function menosVol(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }else{
            echo "Caixa desligada!";
        }
        
    }

    function ligarMudo(){
        if($this->getVolume() > 0 && $this->getLigado()){
            $this->setVolume(0);
        }
    }

    function desligarMudo(){
        if($this->getVolume() == 0 && $this->getLigado()){
            $this->setVolume(10);
        }
    }

    function play(){
        if($this->getLigado()){
            $this->setTocando(true);
        }
        
    }

    function pause(){
        if($this->getLigado()){
            $this->setTocando(false);
        }
        
    }
}
