
<?php


    class jogador extends Pessoa{
        private $posicao;

        

        public function getPosicao(){
            return $this->posicao;
        }

        
        public function setPosicao($posicao){
            $this->posicao = $posicao;
        }



        function posicaoJogador($posicao){
            echo "A possicao do jogador é $posicao";
        }
    }