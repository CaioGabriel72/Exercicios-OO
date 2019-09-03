<?php
class Produto{

    public $nome;
    public $descricao;
    public $tipo;
    public $unidade;
    public $preco;

    function exibicao_unitaria(){
        echo "<fieldset>
        <form action='exibi1.php' method='post'>
            <div>
                <label>Nome:</label>".$this->nome."
            </div>
            <div>
                <label>Descrição:</label>".$this->descricao."
            </div>
            <div>
                <label>Tipo:</label>".$this->tipo."
            </div>
            <div>
                <label>Unidade:</label>".$this->unidade."
            </div>
            <div>
                <label>Preço</label>".$this->preco."
            </div>
        </form>
    </fieldset>";
    }
    function exibicao_tabela(){
        echo "<tr>
                <td>".$this->nome."</td>
                <td>".$this->descricao."</td>
                <td>".$this->tipo."</td>
                <td>".$this->unidade."</td>
                <td>".$this->preco."</td>
            </tr>";

    }
    function __constructp($np, $d, $t, $u, $pr){ // tem q ter dois anderline, se tiver so um não imprime
        $this->nome = $np;
        $this->descricao = $d;
        $this->tipo = $t;
        $this->unidade = $u;
        $this->preco = $pr;
    }
}
?>