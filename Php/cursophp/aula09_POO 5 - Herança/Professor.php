<?php

require_once 'Pessoa.php';

    class professor extends Pessoa{
        private $especialidade;
        private $salario;


        
        //metodos assessores e modificadores
        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

       


        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($salario){
                $this->salario = $salario;
        }



        function receberAumento($salario){
            $this->setSalario($this->getSalario() + $salario);      //meu setsalario, vai pegar o salario que ele ja tem em getsalario, e alterar para uum novo valor somado a getsalario.
        }


    }