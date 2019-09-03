<?php

	class Pessoa{		
		public $nome;
		public $email;
		public $telefone;
		public $idade;
		public $sexo;

		public function __construct($vetor){
			$this->nome = $vetor["nome"];
			$this->email = $vetor["email"];
			$this->telefone = $vetor["telefone"];
			$this->idade = $vetor["idade"];
			$this->sexo = $vetor["sexo"];
		}

		public function exibe_pessoa(){
			
			
			echo "
			<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Email:</label> ".$this->email."
					</div>
					<div>
						<label>Telefone:</label> ".$this->telefone."
					</div>
					<div>	
						<label>Sexo:</label> ".$this->sexo."
					</div>
					<div>	
						<label>Idade:</label> ".$this->idade."
					</div>";
			
			
		}
		
	}
	

?>