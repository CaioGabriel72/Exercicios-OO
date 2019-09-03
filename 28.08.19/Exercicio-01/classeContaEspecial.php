<?php
    include "classeContaCorrente.php";
    class ContaEspecial extends ContaCorrente{
            protected $limite;
        
        public function __construct($vetor){
            parent::__construct($vetor);
            $this->limite=$vetor["limite"];
        }
        public function sacar(){
            $this->saldo = $saldo- $saque;           
        }
        function exibe_especial(){
            $this->exibe_dados();

            echo "<div>
                    <label>Limite</label>".$this->limite."
                  </div>
                </fieldset>";
            }
        function public exibe_listaEspecial(){
            $this->exibe_lista();
            }
        }
?>