<?php
    class Animal{
        public $peso;
        public $cor;
        public $tamanho;
        protected $velocidade_maxima;
    
        public function __construct($vetor){
            $this->peso=$vetor["peso"];
            $this->cor=$vetor["cor"];
            $this->tamanho=$vetor["tamanho"];
        }
    }

?>

