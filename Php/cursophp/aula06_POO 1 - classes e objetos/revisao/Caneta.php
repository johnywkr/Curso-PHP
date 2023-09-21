<?

class Caneta {
    //Atributos de minha caneta. Atributos = caracteristicas
    public $cor;
    public $marca;
    public $tampada;
    public $ambiente;

    //comportamentos = Metodos

    function escrever(){
        echo "escrevendo...";
    }

    function desenhar(){
        echo "desenhando...";
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampada(){
        $this->tampada = false;
    }


}