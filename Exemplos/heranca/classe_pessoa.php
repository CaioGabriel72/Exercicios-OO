<?php
    class Pessoa{

    public $nome;
    public $email;
    public $idade;
    public $sexo;
    public $telefone;

    public function __construct("$vetor"){
        $this->nome = $vetor["nome"];
        $this->email = $vetor["email"];
        $this->idade = $vetor["idade"];
        $this->sexo = $vetor["sexo"];
        $this->telefone = $vetor["telefone"];
    }
}


?>