<?php

    class ClienteDTO{
        private $nome;
        private $email;
        private $sexo;
        private $cpf;
        private $datanasc;

         
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        
        public function getDatanasc(){
            return $this->datanasc;
        }
        public function setDatanasc($datanasc){
            $this->datanasc = $datanasc;
        }
    }
