

<?php

class carro
{

    // Atributos da minha class caneta. Atributos = caracteristicas
    public $nome;
    public $motorista;
    public $fabricante;
    public $combustivel;
    public $ano;
    public $cor;
    public $pessoas;

    // comportamentos = Métodos

    function partida()
    {
        if ($this->motorista) {             /*usa-se $this para acessar membros (atributos, métodos) da instância */
            echo "Não posso dar partida....";
        } else {
            echo "Posso Ligar o carro....";
        }
    }

    function abastecer()                             //abastecer é meu metodo .
    {
        if($this->combustivel == 'gasolina'){               //combustivel é meu atributo, representado por uma chave de fenda.
            echo "posso dirigir....";
        }else{
            echo "nao posso dirigir....";  
        }                   
        
    }

   

    function pessoas()          //entre parenteses pode ser utilizado um parametro !!
    {
       if($this-> pessoas == 4){
            echo "Posso seguir viajem " ;
       }else{
           echo "Não posso seguir viajem";
       }
    }
}




?>



