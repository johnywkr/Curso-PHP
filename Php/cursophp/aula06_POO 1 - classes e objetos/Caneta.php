<?php

class Caneta {
    //atributos da minha caneta
    public $status;
    public $cpf;
    public $saldo;
    public $limite;

    //metodos

    function contaAtiva(){
        $this->status = true;
    }

    function contaDesativada(){
        $this->status = false;
    }

    function sacar($valorSacar){
        if($this->status == false){
            echo "Por favor ative sua conta!";
        }elseif($this->$valorSacar > $this->sacar){
            echo " Nao pode realizar o saque!";
        }else{
            $this->sacar -= $this->$valorSacar;
        }
    }
}
