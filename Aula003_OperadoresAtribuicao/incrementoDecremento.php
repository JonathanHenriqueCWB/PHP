<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Incremento e Decremento</title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<h1>Passe um número pela URL (numero)</h1>
		<?php

			/*
				Pre encremento encrementa a variavel e depois a utiliza
				Pos utiliza a variavel de dpois encrementa
				Pode ser atribuido mais de um valor EX: $numero+2, $numero+3...
				A mesma regra se aplica a todos operadores 
			*/
			
			$numero = $_GET["numero"];
			echo "Pre encremento: em um: " . ++$numero;
			echo "<br>Pos encremento: em um: " . $numero++;

			//Riniciando a variavel $numero
			$numero = $_GET["numero"];

			echo "<br><br>Pos decremento em um: " . $numero--; 
			echo "<br>Pos decremento em dois: " . ($numero-2); 
		?>		
	</div>
</body>
</html> 