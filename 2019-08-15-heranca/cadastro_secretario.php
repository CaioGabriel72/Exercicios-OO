<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("classeSecretario.php");
		include("cabecalho.php");
		
		$s = new Secretario($_POST);
	
		session_start();
		
		$_SESSION["secretario"][]=$s;
		
		echo "Secretario(a) cadastrado(a) com sucesso!";
		$s->exibe();

	?>
	</body>
</html>