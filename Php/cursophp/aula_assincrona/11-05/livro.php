

<?php
require_once 'interface.php';
    class livro implements controlador {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
        

        
        //metodos assessores e modificadores
        
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($titulo){
                $this->titulo = $titulo;
        }

        
        public function getAutor(){
            return $this->autor;
        }
        public function setAutor($autor){
            $this->autor = $autor;
        }

        
        public function getTotPaginas(){
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

       
        public function getPagAtual(){
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

       
        public function getAberto(){
            return $this->aberto;
        }
        public function setAberto($aberto){
            $this->aberto = $aberto;
        }

        
        public function getLeitor(){
            return $this->leitor;
        }
        public function setLeitor($leitor){
            $this->leitor = $leitor;;
        }


        //interface

        function abrir(){

        }

        function fechar(){

        }

        function folhear(){
            
        }

        function avancarPag(){
            
        }

        function voltarPag(){
            
        }


        
    }