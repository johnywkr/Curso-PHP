

<?php 
require_once 'interface.php';
class CaixaDeSom implements Controlador{
    // Atributos da caixa de som
    private $volume;
    private $ligado;
    private $tocando;


    // Metodo Construtor
    
    function CaixaDeSom(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
 

    // Metodos assessores e modificadores

    private function getvolume(){
        return $this->volume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }


    private function getLigado()
    {
        return $this->ligado;
    }

 
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    private function getTocando()
    {
        return $this->tocando;
    }


    private function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }


    // Sobrescrevendo a Interface

    function ligar(){
        $this->setLigado(true);
    }

    function desligar(){
        $this->setLigado(false);
    }

    function abrirMenu(){
        if($this->getLigado()){
            echo "Esta tocando: " , $this->getTocando() ? "Sim" : "Nao" , PHP_EOL;
            echo "Volume: " , $this->getvolume() , PHP_EOL;
            for($c = 1; $c <= $this->getvolume(); $c+=10){
                echo "|";
            }
        }else{
            echo "A caixa de som esta delisgada";
        }
       


    }

    function fecharMenu(){
        if($this->getLigado()){
            echo "fechando menu";
        }else{
            echo "Caixa desligada!";
        }
        
    }

    function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getvolume() + 5);
        }else{
            echo "Caixa desligada";
        }
    }

    function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getvolume() - 5);
        }else{
            echo "Caixa desligada";
        }
    }

    function ligarMudo(){
        if($this->getvolume() > 0 && $this->getLigado()){
            $this->setVolume(0);
        } 
    }

    function desligarMudo(){
        if($this->getvolume() == 0 && $this->getLigado()){
            $this->setVolume(10);
        }
    }

    function play(){
        if($this->getLigado()){
            $this->setTocando(true);
        }else{
            echo "Caixa desligada!";
        }
    }

    function pause(){
        if($this->getLigado() ){
            $this->setTocando(false);
        }else{
            echo "Caixa desligada";
        }
    }
}