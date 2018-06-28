<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title></title>
	<meta charset="utf-8">

	<style type="text/css">
		html body{ margin: 0; padding: 0;}
		body { background-color: #DDD;}
		article, aside, section, header, footer, nav { display:block; }


		main{ width: 75%; height: 500px; background-color: #fff; margin: 10px auto; box-shadow: 0 0 10px black;}
		section{ padding: 10px; text-align: center; }

		input[type="number"]{
			padding: 5px 10px;
		}

		input[type="submit"]{
			width: 150px;
			color: white;
			background-color: black;
			padding: 10px 25px;
			border-radius: 10px;
		}
		input[type="submit"]:hover{
			color: #000;
			background-color: #FFF;
		}

	</style>

</head>
<body>
	<main>
		<section>
			<h1>Digite um valor entre 0 e 100</h1>
			<h2>Cria caixas de texto dinamicamente</h2>			
			<form method="get" action="solucao002.php">
				<input type="number" name="v1" max="100" min="0" value="0"><br><br>
				<input type="submit" name="Enviar">
			</form>
		</section>
	</main>
</body>
</html>