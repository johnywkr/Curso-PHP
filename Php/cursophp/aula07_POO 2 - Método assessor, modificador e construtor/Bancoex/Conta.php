<?php 

class Conta{    
    //Atributos da conta
    public $titular;
    private $saldo;
   // public $tipo;
   // public $limite;
    private $status;

    //Metodos

    function abrirConta(){
        $this->status = true;
    }

    function fecharConta(){
        $this->status = false;
    }

    function sacar($valorSaque){
        if($this->getStatus() == false){
           echo "Verifique o status da conta"; 
        }else if($valorSaque > $this->getSaldo()){
            echo "Saldo insuficiente para saque";
        }else{
            $this->setSaldo($this->getSaldo() - $valorSaque); 
        }
    }

    function depositar($valorDeposito){
        if($this->status == false){
            echo "Verifique o status da conta";
        } else{
            $this->saldo += $valorDeposito;

        }
    }

    function extrato(){
        $extrato =  $this->getSaldo();
        if($extrato == 0){
          echo "Saldo em conta: 0";
        }else{
          echo "Saldo em conta: R$$extrato";
        }   
  }


    //metodos especiais
    function __construct($nome,$tipo){
        $this->setTitular($nome);
        $this->setTipo($tipo);
        $this->setLimite(100);
        $this->setStatus(true);
    }


    function getSaldo(){                      //get -> pegar
        return $this -> saldo;
    }

    function setSaldo($valorSaldo){           //set -> enviar
        $this -> saldo = $valorSaldo;
    }



    function getTitular(){
        return $this->titular;
    }
    
    function setTitular($t){
        $this->titular = $t;
    }



    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;

        return $this;
    }



    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite){
        $this->limite = $limite;

        return $this;
    }



    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;

        return $this;
    }
}