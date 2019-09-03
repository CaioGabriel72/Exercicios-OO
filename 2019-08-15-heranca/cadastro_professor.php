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
		include("classeProfessor.php");
		include("cabecalho.php");
		
		$p = new Professor($_POST);
	
		session_start();
		
		$_SESSION["professor"][]=$p;
		
		echo "Professor(a) cadastrado(a) com sucesso!";
		$p->exibe();

	?>
	</body>
</html>