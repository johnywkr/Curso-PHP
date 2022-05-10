<?php
                                        // abstract class -> eu nao vou poder instaciar um objecto atraves da classe pessoa, ela vai servir so pra ser herdada por outras classes.

   abstract class Pessoa{               //Protected -> só essa classe e quem esta herdando essa class ,conseguem utilizar os atributos protegidos.
        protected $nome;
        protected $idade;
        protected $sexo;


  //  1º METODOS ACESSESSORES E MODIFICADORES DE CADA ATRIBUTO


        function getNome(){             // get retorna.
            return $this->nome;         // O getnome só vai retornar o nome, que ja esta no protected $nome.
        }


        function setNome($nome){        // set altera e envia um novo nome.
            $this->nome = $nome;        // O setNome vai alterar o nome , enviar um novo nome para o protected $nome.
        }

        
        function getIdade(){
            return $this->idade;
        }

        
        function setIdade($idade) {
            $this->idade = $idade;
        }

        
        public function getSexo(){
            return $this->sexo;
        }

        
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }



  //  2 º METODOS QUE CADA UM VAI TER



        function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
        }


 //  3º metodo construtor
 
        function __construct($nome,$sexo,$idade){
            $this->setNome($nome);
            $this->setSexo($sexo);
            $this->setIdade($idade);
        }

    }