<?php
class Pessoa{

    private $nome;
    public $email;
    private $cpf;
    private $sexo;
    private $data_nasc;
    private $senha;
    protected $posicao;

    function __construct($vetor){
        $this->nome=$vetor["nome"];
        $this->email=$vetor["email"];
        $this->cpf=$vetor["cpf"];
        $this->sexo=$vetor["sexo"];
        $this->data_nasc=$vetor["data_nasc"];
        $this->posicao=0;
    }
    public function get_correr(){
        return ($this->posicao);
    }
    public function get_nome(){
        return ($this->nome);
    }

    public function get_email(){
        return ($this->email);
    }

    public function get_email($e){
        return ($this->email=$e);
    }

    public function get_cpf(){
        return ($this->cpf);
    }

    public function get_sexo(){
        return ($this->sexo);
    }
    
    public function set_senha($s){
        $this->senha = $s;
    }
    
    public function get_data_nasc(){
        return ($this->data_nasc);
    }
    public function correr(){
        $this->posicao++;
    }

}
?>