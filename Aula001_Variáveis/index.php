<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<title>Variáveis em PHP</title>
</head>
<body>

	<?php

		//echo comando de output
		echo "Variáveis em PHP<br>"; 

		/*
			Váriavel em PHP não e preciso informar o tipo da váriavel
			a mesma e identificada automaticamente o tipo da variável
			É possível usar um typecast para forçar a variável a erdar o tipo
			$numero = (int) 100; 
		*/

		echo "<br>String: " . $string = "Conjunto de caracteres";
		echo "<br>Inteiro: " . $inteiro = 500;
		echo "<br>Char: " . $char = 'x';
		echo "<br>Ponto Flutuante: " . $flot = 2.50;
		echo "<br>Double: " . $double = 2.5555555555;
		echo "<br>Tipo Lógico (boll): ";
		var_dump($bool = true);

		echo "<br><br> typecast PHP";
		echo "<br>" . $numero = (int) 100;

		echo "<br><br>Concatenação PHP";
		$nome = "Jonathan Henrique";
		$sobrenome ="Alves de Lima";

		echo "<br>$nome $sobrenome";


	?>

</body>
</html>