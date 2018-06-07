<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Funçoes Aritiméticas</title>
	<meta charset="utf-8">
	
	<style type="text/css">
		h2{
			font: 15pt Arial;
			color: #171559;
			font-weight: bold;
		}	
	</style>

</head>
<body>



	<?php

		$x = $_GET["x"];
		$y = $_GET["y"];

		echo "<h2>Valores Recebidos por parametros $x e $y</h2>";
		echo "<br>Valor absoluto de $x e " . abs($x);
		echo "<br>O valor de $x<sup>$y</sup> é: " . pow($x, $y);
		echo "<br>A raiz de $x e: " . sqrt($x);
		echo "<br>O valor d $y arrendondado é: " . round($y); // ceil floor (cima, baixo)
		echo "<br>A parte inteira de $y e: " . intval($y);
		echo "<br>O valor de $x em moeda é: " . number_format($x , 2 , "," , "."); 

	?>
</body>
</html>