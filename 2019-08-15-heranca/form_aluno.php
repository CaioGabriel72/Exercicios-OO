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
		<form method="post" action="cadastro_aluno.php">
			<?php include "form_pessoa.php";?>
			<input type="text" name="matricula" 
				placeholder="Numero de matrícula..." />
			<input type="number" name="nota" 
				placeholder="nota final..." />
			<input type="submit" value="cadastrar" /> <br />	
			
		</form>
	</body>
</html>
