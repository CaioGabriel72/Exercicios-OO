<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastro_professor.php">
			<?php include "form_pessoa.php";?>
			<input type="text" name="disciplina" 
				placeholder="Digite a disciplina que ele ministra..." />
			<input type="number" name="salario" 
				placeholder="Salario..." />
			<input type="submit" value="cadastrar" /> <br />	
			
		</form>
	</body>
</html>
