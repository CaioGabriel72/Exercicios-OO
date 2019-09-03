<?php

    include "classePessoa.php";
    class Secretario extends Pessoa{

        public $salario;

        public function __construct($vetor){
            $this->salario = $vetor["salario"];
    }
    }

?>