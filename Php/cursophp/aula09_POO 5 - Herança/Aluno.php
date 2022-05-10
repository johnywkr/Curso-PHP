

<?php
require_once 'Pessoa.php';

    class Aluno extends Pessoa{                 //Minha class Aluno esta herdando todos os atributos da class Pessoa atraves do extendes.
        private $matricula;
        private $curso;


        //metodos assessores e modificadores
        public function getMatricula(){
            return $this->matricula;
        }

        
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        

        public function getCurso()
        {
                return $this->curso;
        }

        
        public function setCurso($curso){
            $this->curso = $curso;
        }


        //metodo para o aluno
        function cancelarMatricula(){
            echo "Cancelando matricula";
        }

        
        function pagarMensalidade(){
            echo "O aluno ", $this->getNome()," pagou a mensalidade!" . PHP_EOL;
        }
    }