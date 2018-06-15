<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">

		body{background-color: #DDD}
		main{ width: 950px; padding: 5px; margin: 0px auto; text-align: center; }
		h1{ color: #0000FF }
		span{ color: #FF0000 }

	</style>
</head>
<body>
	<main>
		<?PHP

			$n1 = isset($_GET["n1"])? $_GET["n1"] : 0;
			$n2 = isset($_GET["n2"])? $_GET["n2"] : 0;
			$media = ($n1 + $n2) / 2;
			$sit;

			if ($media < 5) {
				$sit = "Reprovado";	
			}elseif ($media >= 7) {
				$sit = "Aprovado";
			}else{
				$sit = "Recuperação";
			}


			echo "<h1>Valor da sua media é: <span>$media</span></h1>";
			echo "<h1>Situação: $sit</h1>";
		?>
	</main>
</body>
</html>