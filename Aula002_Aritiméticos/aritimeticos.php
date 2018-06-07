<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Aritiméticos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		//Aritiéticos Presedencia Funço~es de aritimética

		/*
			+ adição 
			- Subtração
			* Multiplicação
			/ Divisão
		*/

		$n1 = 10;
		$n2 = 4;

		echo "Resultada da soma de dois valores: " . ($n1 + $n2);
		echo "<br>Resultada da subtração de dois valores: " . ($n1 - $n2);
		echo "<br>Resultada da multiplicação de dois valores: " . ($n1 * $n2);
		echo "<br>Resultada da divisão de dois valores: " . ($n1 / $n2);
		echo "<br>Resultada do resto da divisão de dois valores: " . ($n1 % $n2);

		/*	ORDEM DE PRECEDÊNCIA
			
			Parêteses ()
			Multiplicação /
			Divisão /
			Módulo %
			Adição +
			Subtração -

		*/
		echo "<br>Media é: " . $media = $n1 + $n2 /2;

		//Pegando valores pela url usando método get
		if (isset($_GET["a"])) {
			
			$a = $_GET["a"];
			$b = $_GET["b"];
			echo "<br>Valor da soma dos parametros pasado pela url: " . ($a + $b);			
		}

	?>
</body>
</html>