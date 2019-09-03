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
		<form method="post" action="cadastro_secretario.php">
			<?php include "form_pessoa.php";?>
			<input type="number" name="salario" 
				placeholder="salario..." />
			<input type="submit" value="cadastrar" /> <br />	
			
		</form>
	</body>
</html>
