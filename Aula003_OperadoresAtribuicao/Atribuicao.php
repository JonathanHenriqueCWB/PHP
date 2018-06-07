<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Operadores de Atribuição</title>
	<meta charset="utf-8">
</head>
<body>
	<div>

		<h1>Passe um preço pela URL (preco)</h1>

		<?php

			$preco = $_GET["preco"];
			echo "Preço informado é R$ :" . number_format($preco, 2);
			//Clacula valor inicia mais 10%, a mesma regra se aplica para subtração, multiplicação...
			$preco += ($preco*10/100); // $peco = $preco + ($preco * 10/100) 
			echo "<br>Valor ajustado em 10%: " . number_format($preco, 2);
		?>

	</div>
</body>
</html>