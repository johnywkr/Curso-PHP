<?php

    class funcionario{
        private $setor;
        private $trabalhando;



        //metodos assessores e modificadores
        public function getSetor(){
            return $this->setor;
        }

        public function setSetor($setor){
            $this->setor = $setor;
        }

      

        public function getTrabalhando(){
            return $this->trabalhando;
        }

        public function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }

        
    }