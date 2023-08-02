

 <?php

    class Conta
    {
        private $status;
        private $limite;
        private $saldo;
        private $tipo;
        private $titular;




        /**
         * Get the value of status
         */
        public function getStatus()
        {
            return $this->status;
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }



        function getLimite()
        {
            return $this->limite;
        }

        function setLimite($limite)
        {
            $this->limite = $limite;
        }



        function getSaldo()
        {
            return $this->saldo;
        }

        function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }



        function getTipo()
        {
            return $this->tipo;
        }

        function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }


        function getTitular()
        {
            return $this->titular;
        }

        function setTitular($titular)
        {
            $this->titular = $titular;
        }



        function abrirConta()
        {
            $this->status = true;
        }

        function fecharConta()
        {
            $this->status = false;
        }


        //METODO CONSTRUTOR
        function __construct($nome,$tipo)
        {
            $this->setTitular($nome);
            $this->setTipo($tipo);
            $this->setLimite(100);
            $this->setStatus(true);
        }


        function sacar($valorSacar)
        {
            if ($this->getStatus() == false) {
                echo "Verifique o status da conta!";
            } elseif ($this->getSaldo() < $valorSacar) {
                echo "Saldo insuficiente para saque!";
            } else {
                $this->setSaldo($this->getSaldo() - $valorSacar);
            } 
            echo "seu saldo é " . $this->saldo . " e vc sacou " . $valorSacar;
        }

        function depositar($valorDeposito){
            if($this->getStatus() == false){
                echo "Verifique o status da conta!";
            }else{
                $this->setSaldo($this->getSaldo() + $valorDeposito);
            }
            //echo "valor depositado RS $valorDeposito ";
        }

        function extrato(){
            $extrato = $this->getSaldo();
            if($extrato == 0){
                echo "saldo em conta 0";
            }else{
                echo "saldo em conta RS $extrato";
            }
        }
    }
