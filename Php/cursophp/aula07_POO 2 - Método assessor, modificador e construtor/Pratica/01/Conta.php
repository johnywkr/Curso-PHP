<?php 

class Conta{    
    //Atributos da conta
    private $titular;
    private $saldo;
    private $tipo;
    private $limite;
    private $status;

    //Metodos publicos

    function abrirConta(){
        $this->status = true;
    }

    function fecharConta(){
        $this->status = false;
    }

    function sacar($valorSaque){
        if($this->status == false){
           echo "Verifique o status da conta"; 
        }else if($valorSaque > $this->saldo){
            echo "Saldo insuficiente para saque";
        }else{
            $this->saldo -= $valorSaque;
        }
    }

    function depositar($valorDeposito){
        if($this->status == false){
            echo "Verifique o status da conta";
        } else{
            $this->saldo += $valorDeposito;

        }
    }

    //METODOS ESPECIAIS

    function getSaldo (){
        return $this->saldo;
    }

    function setSaldo($valorSaldo){
        $this->saldo = $valorSaldo;
    }

    function getTitular(){
        return $this->titular;
    }

    function setTitular($t){
        $this->titular = $t;
    }
}