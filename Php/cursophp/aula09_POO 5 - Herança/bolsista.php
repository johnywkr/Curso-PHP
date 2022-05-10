<?php
require_once "Aluno.php";

    class bolsista extends Aluno{
        private $bolsa;


        

       
        public function getBolsa(){
            return $this->bolsa;
        }

        
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

        function pagarMensalidade(){
            echo "Mensalidade do aluno" . $this->getNome(), " foi paga com desconto de bolsista" . PHP_EOL;
        }

    }