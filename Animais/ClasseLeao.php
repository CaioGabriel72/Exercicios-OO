<?php
    include ("ClasseAnimal.php");
    include ("InterfaceExibicao.php");

    class Leao extends Animal implements Exibicao{
        private $tamJuba;
        private $rugido;
    
    public function __construct($vetor){
        parent::__construct($vetor);
        $this->velocidade_maxima=50;
        $this->tamJuba=$vetor["tamJuba"];
        $this->rugido=$vetor["rugido"];
    }
    public function exibir(){
        echo "<label>Peso:</label>".$this->peso."<br/>";
        echo "<label>Tamanho:</label>".$this->tamanho."<br/>";
        echo "<label>Cor:</label>".$this->cor."<br/>";
        echo "<label>Tamanho da Juba:</label>".$this->tamJuba."<br/>";
        echo "<label>Rugido:</label>".$this->rugido."<br/>";
        echo "<label>Velocidade Máxima:</label>".$this->velocidade_maxima."<br/>";
    }
}
?>