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
				<th>Matrícula</th>
				<th>Nota</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["aluno"] as $i=>$a){
					$a->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>