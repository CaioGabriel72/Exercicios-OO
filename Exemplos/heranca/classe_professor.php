<?php

    include "classePessoa.php";
    class Professor extends Pessoa{

        public $salario;
        public $disciplina;


        public function __construct($vetor){
            parent::__construct($vetor); // busca a classe mãe
            $this->salario = $vetor["salario"];
            $this->disciplina = $vetor["disciplina"];
        }

        function exibe(){
            echo "<fieldset>
            <form action='exibi1.php' method='post'>
                <div>
                    <label>Nome:</label>".$this->nome."
                </div>
                <div>
                    <label>E-mail:</label>".$this->email."
                </div>
                <div>
                    <label>Telefone:</label>".$this->telefone."
                </div>
                <div>
                    <label>Sexo:</label>".$this->sexo."
                </div>
                <div>
                    <label>Idade:</label>".$this->idade."
                </div>
                <div>
                    <label>Salario:</label>".$this->salario."
                </div>
                <div>
                    <label>Disciplina:</label>".$this->diciplina."
                </div>
            </form>
        </fieldset>";
        }


    }

?>