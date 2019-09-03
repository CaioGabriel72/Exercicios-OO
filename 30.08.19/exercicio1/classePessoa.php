<?php
class Pessoa{

    public $nome;
    public $email;
    public $cpf;
    public $sexo;
    public $datanasc;

    function exibe(){
        echo "<fieldset>
        <form action='exibi1.php' method='post'>
            <div>
                <label>Nome:</label>'.$this->nome.'
            </div>
            <div>
                <label>E-mail:</label>'.$this->email.'
            </div>
            <div>
                <label>CPF:</label>'.$this->cpf.'
            </div>
            <div>
                <label>Sexo:</label>'.$this->sexo.'
            </div>
            <div>
                <label>Data de Nascimento:</label>'.$this->datanasc.'
            </div>
        </form>
    </fieldset>";
    }
}
?>