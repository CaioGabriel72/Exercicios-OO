<?php

    include "classePessoa.php";
    class Aluno extends Pessoa{

        public $matricula;
        public $nota;

        public function __construct($vetor){
            $this->matricula = $vetor["matricula"];
            $this->nota = $vetor["nota"];
    }
    }

?>