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
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Sexo</th>
				<th>Idade</th>
				<th>Disciplina</th>
				<th>Salário</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["professor"] as $i=>$p){
					$p->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>