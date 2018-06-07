<!DOCTYPE html>
<html>
<head>
	<title>Variávis Referencia</title>
</head>
<body>

	<?php

		echo "<h2>Valores de Variáveis normais</h2>";
		$a = 5;
		$b = 10;
		echo "Valor de A: $a, valor de B: $b";

		/*
			A variavel b apenas apontará para a,
			não receberá seu valor de memória,
			logo quando alterado o valor de $b
			a variavel $A recebera o valor da nova atribuição
		*/

		echo "<h2>Valores de Variáveis Referenciadas</h2>";
		$a = 5;
		$b = &$a;
		echo "Valor de A: $a, valor de B: $b";
		$b = $b + 5;
		echo "<br>Valor de alterado pela variável b = A: $a, valor de B: $b";


	?>

</body>
</html>