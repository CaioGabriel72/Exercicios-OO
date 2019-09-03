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
		include("classeAluno.php");
		include("cabecalho.php");
		
		$a = new Aluno($_POST);
	
		session_start();
		
		$_SESSION["aluno"][]=$a;
		
		echo "Aluno(a) cadastrado(a) com sucesso!";
		$a->exibe();

	?>
	</body>
</html>