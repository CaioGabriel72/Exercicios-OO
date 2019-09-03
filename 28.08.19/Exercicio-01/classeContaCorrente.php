<?php
    class ContaCorrente{

        private $cpf;
        private $nome;
        private $email;
        private $nroConta;
        private $saldo;


        function __construct($vetor){
            $this->cpf=$vetor["cpf"];
            $this->nome=$vetor["nome"];
            $this->email=$vetor["email"];
            $this->nroConta = @date("Ymdhis");
            $this->saldo = 0;

        }

        public function exibe_dados(){
            echo "<fieldset>
                <div>
                    <label>Nome:</label>".$this->nome."
                </div>
                <div>
                    <label>Cpf:</label>".$this->cpf."
                </div>
                <div>
                    <label>Email:</label>".$this->email."
                </div>
                <div>
                    <label>NroConta:</label>".$this->nroConta."
                </div>
                <div>
                    <label>Saldo Atual:</label>".$this->saldo."
                </fieldset>";
        }
        public function exibe_saldo(){
            echo "<fieldset>
                    <div>
                        <label>Saldo da Conta:</label>".$this->saldo."
                    </div>
                </fieldset>";
        }
        public function sacar(){
            $this->saldo = $saldo- $saque;
        }
        public function deposito(){
        $this->saldo= $saldo- $deposito;

        }

        public function exibe_lista(){
            echo "<li><a href='operar_conta.php'>$this->nome</a> 
            ($this->nroConta) - R$ $this->saldo</li>";
        }
    }
?>