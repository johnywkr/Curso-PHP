<?php 

class Caneta{
    // Atributos da minha class caneta. Atributos = caracteristicas
    public $cor;
    public $fabricante;
    public $ponta;
    public $tampada;

    // comportamentos = Métodos

    function escrever(){
        if($this->tampada == true){
            echo "Nao posso escrever";
        }else{
            echo "Escrevendo";
        }
    }

    function desenhar(){
        if($this->tampada){
            echo "Nao posso desenhar";
        }else{
            echo "Desenhando...";
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }

    function prenderCabelo(){
        echo "Prendendo o cabelo";
    }
}