<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title></title>
	<meta charset="utf-8">
	<meta name="author" content="Jonathan Henrique">
</head>
<body>

	<h1>Informe dois valores e um operador pela URL (s para soma, outro caractet multiplicação)</h1>

	<?php

		/*
			Maior >
			Menor <
			Maior ou Igual >=
			Menor ou Igual <=
			Diferente != ou <>
			Igual ==
			Idêndtico ===
			&& e tabela verdade
			||/or ou tabela verdade
		*/

		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$op = $_GET["op"];

		
		echo "Valores  Informados pela URL: $n2 e $n1<br>";

		echo ($op == 's') ? "Somar" : "Multiplicar";
		echo " caractere Informados Pela URL: $op<br>";

		$resultado = ($op == 's') ? $n2+$n2 : $n1*$n2;
		echo "Resultado: $resultado";

	?>
	
</body>
</html>