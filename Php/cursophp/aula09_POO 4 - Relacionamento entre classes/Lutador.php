<?php 

class Lutador{
    private $nome,$nacionalidade,$idade;
    private $altura,$peso;
    private $categoria;
    private $vitorias,$derrotas,$empates;

    // Metodo construtor
    function __construct($nome, $nacio, $idade, $altu, $peso, $vitorias, $derrotas,$empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacio);
        $this->setIdade($idade);
        $this->setAltura($altu);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }
    
    // Metodos publicos
    function apresentar(){
        echo " <p>Chegou a hora! O lutador ", $this->getNome()," vai mostrar o seu valor! \n";
        echo "Ele pesa ", $this->getPeso(),"KG. \n É da categoria ", $this->getCategoria();
        echo " \n Ele possui: ",$this->getVitorias(), " vitorias, ",$this->getDerrotas(), " derrotas e ",$this->getEmpates()," empates </p>";


    }
    
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    

    
    // Metodos assessores e modificadores
    
    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }


    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

  
    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

 
    public function getPeso()
    {
        return $this->peso;
    }

 
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
      
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria(){
    if($this->peso <= 65){
        $this->categoria = "Peso pena";
    }else if($this->peso <= 75){
        $this->categoria = "Pese leve";
    }else if($this->peso <= 85){
        $this->categoria = "Peso Medio";
    }else {
        $this->categoria = "Peso Pesado";
    }

       
    }


    public function getVitorias()
    {
        return $this->vitorias;
    }


    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    
    public function getDerrotas()
    {
        return $this->derrotas;
    }


    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

 
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
}