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
                <label>Nome:</label>".$this->nome."
            </div>
            <div>
                <label>E-mail:</label>".$this->email."
            </div>
            <div>
                <label>CPF:</label>".$this->cpf."
            </div>
            <div>
                <label>Sexo:</label>".$this->sexo."
            </div>
            <div>
                <label>Data de Nascimento:</label>".$this->datanasc."
            </div>
        </form>
    </fieldset>";
    }
    function exibe_tr(){
        echo "<tr>
                <td>".$this->nome."</td>
                <td>".$this->email."</td>
                <td>".$this->cpf."</td>
                <td>".$this->sexo."</td>
                <td>".$this->datanasc."</td>
            </tr>";

    }
    function __construct($n, $e, $c, $s, $d){ // tem q ter dois anderline, se tiver so um não imprime
        $this->nome = $n;
        $this->email = $e;
        $this->cpf = $c;
        $this->sexo = $s;
        $this->datanasc = $d;
    }
}
?>