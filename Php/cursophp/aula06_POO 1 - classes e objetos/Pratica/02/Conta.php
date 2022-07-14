<?php

class Conta{
        //atributos da conta
        public $titular;
        public $status;
        public $saldo;
        public $limite;
        public $tipo;

        //metodos da conta
        function abrirConta(){
            $this->status = true;
        }


        function fecharConta(){
            $this->status = false;
        }


        function sacar($valorSaque){
            if($this->status == false){
                echo 'Verifique o status da conta!';
            }elseif($valorSaque > $this->saldo){
                echo "Saldo insuficiente para saque!";
            }else{
                $this->saldo -= $valorSaque;
            }
        }

        function depositar($valorDeposito){
            if($this->status == false){
                echo "Verifique o status da conta!";
            }else{
                $this->saldo += $valorDeposito;
            }
        }
}