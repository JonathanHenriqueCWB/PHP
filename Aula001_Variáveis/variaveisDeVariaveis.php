<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Variáveis de Variáveis</title>
	<meta charset="utf-8">
</head>
<body>
	<di>

		<h1>Variáveis de Variáveis</h1>

		<?php

			/*	VARIÁVEIS DE VARIÁVEIS

				Uma variável de variável é uma 
				variável criada com valor de memória de 
				outra variável
			*/

			$site = "CursoEmVideo";
			$$site = "Curso de PHP"; // Criará uma variavel de nome CursoEmVideo e atribuirá o valor Curso de PHP

			echo "<br>" . $site ;
			echo "<br>" . $CursoEmVideo ;

		?>
	</di>
</body>
</html>