<?php 
require_once 'Lutador.php';
class Luta{
    // Atributos da luta
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    function marcarLuta($l1,$l2){
        if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){
            $this->setAprovada(true);
            echo "Luta marcada entre ", $l1->getNome();
            echo " e ", $l2->getNome();
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
            
        }else{
            echo "Luta nao pode acontecer";
        }
    }

    function lutar(){
        if($this->getAprovada()){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();

            $r = rand(0,2);

            switch($r){
                case 0:
                    echo "Luta empatada";
                    $this->desafiante->setEmpates($this->desafiante->getEmpates() + 1);
                    $this->desafiado->setEmpates($this->desafiado->getEmpates() + 1);
                    break;
                case 1:
                    echo "O lutador ", $this->desafiante->getNome()," ganhou!";
                    $this->desafiante->setVitorias($this->desafiante->getVitorias() + 1);
                    $this->desafiado->setDerrotas($this->desafiado->getDerrotas() + 1);
                    break;
                case 2:
                    echo "O lutador ", $this->desafiado->getNome()," ganhou!";
                    $this->desafiado->setVitorias($this->desafiado->getVitorias() + 1);
                    $this->desafiante->setDerrotas($this->desafiante->getDerrotas() + 1);

            }

        }else{
            echo "A luta nao pode acontecer";
        }
    }


    // Metodos assessores e modificadores
    public function getDesafiante()
    {
        return $this->desafiante;
    }


    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

 
    public function getDesafiado()
    {
        return $this->desafiado;
    }


    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }


    public function getRounds()
    {
        return $this->rounds;
    }


    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

   
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}