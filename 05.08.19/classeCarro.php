<?php

    class Carro{

        public $cor;
        public $porta;
        public $velocidade_maxima;
        public $velocidade_atual=0;
        //...   ...//
        function mostrar_velocidade(){
            echo $this->velocidade_atual;
        }
        //metodo
        function acelerar($a,$t){
            $this->velocidade_atual = 
            $this->velocidade_atual + $a*$t;

        }

        // metodo com passagem de parametro
        function frear($a,$t){
            $this->velocidade_atual = 
            $this->velocidade_atual - $a*$t;
        }

        function virar($lado){
            echo "Virando para ".$lado;
        }
        // ...
    }

?>