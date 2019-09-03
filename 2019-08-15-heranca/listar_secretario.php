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
				<th>Salario</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["secretario"] as $i=>$s){
					$s->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>