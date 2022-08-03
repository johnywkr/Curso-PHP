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
        if($this->getStatus() == false){
           echo "Verifique o status da conta"; 
        }else if($valorSaque > $this->getSaldo()){
            echo "Saldo insuficiente para saque";
        }else{
            $this->saldo -= $valorSaque;
        }
    }

    function depositar($valorDeposito){
        if($this->getStatus() == false){
            echo "Verifique o status da conta";
        } else{
            $this->setSaldo($this->getSaldo() - $valorDeposito);
            //Meu setSaldoo ta enviando o valor do (getSaldo - valorDeposito) para tela.
        }
    }

    //METODOS ESPECIAIS

    function getSaldo (){
        return $this->saldo;
    }

    function setSaldo($valorSaldo){
        $this->saldo = $valorSaldo;
    }


    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }


    
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }



    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite){
        $this->limite = $limite;
    }
}