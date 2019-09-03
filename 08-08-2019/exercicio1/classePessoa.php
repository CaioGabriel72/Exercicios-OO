<?php
class Pessoa{

    private $nome;
    public $email;
    private $cpf;
    private $sexo;
    private $datanasc;

    function_construct(){
        $this->nome = $vetor["nome"];
        $this->email = $vetor["email"];
        $this->cpf = $vetor["cpf"];
        $this->sexo = $vetor["sexo"];
        $this->datanasc = $vetor["datanasc"];
    }
    public function get_nome(){
        return $this->nome;
    }
}
?>