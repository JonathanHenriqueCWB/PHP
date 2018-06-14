<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		
			//so irá funcionar caso usuário tente entrar direto pela url
			$nome =  isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
			$ano = isset($_GET["ano"])? $_GET["ano"]: "Não informado";
			$sexo = isset($_GET["sexo"])? $_GET["sexo"]: "Não informado";
			$idade = isset($_GET["ano"])? date("Y") - $ano : date("Y") - date("Y");

			echo "Nome: $nome";
			echo "<br>Data Nasc: $ano";
			echo "<br>Sexo: $sexo";
			echo "<br>Idade: $idade";
		
	?>

	<br><a href="exercicio02.html">Voltar</a>

</body>
</html>