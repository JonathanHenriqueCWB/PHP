<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="description" content="recebe valor do formulario do exercicio 01">
</head>
<body>

	<?php

		$valor = $_GET["valor"];
		//Calcula a raiz quadrada do valor passado do formulário
		$rq = sqrt($valor);

		//numer_format(variavel , númeroCasasDecimais)
		echo "<h1>A raiz Quadadra de $valor é: " . number_format($rq, 2) . "</h1>"

	?>


	<br><a href="exercicio01.html">Voltar</a>

</body>
</html>