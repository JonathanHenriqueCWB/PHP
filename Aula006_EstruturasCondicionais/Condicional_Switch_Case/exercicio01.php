<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Swtch Case</title>
	<meta charset="utf-8">
	<style type="text/css">
		html, body{
			margin: 0px;
			padding: 0px;
		}

		body{
			background-color: #DDD; 
		}

	    article, aside, section, header, footer, nav {
            display:block;
        }
        /*####################################*/
		span{
			color: red;
		}
		h1{
			width: 960px;
			background-color: #FFF;
			padding: 20px;
			margin: 20px auto; 
			color: blue;
			text-align: center;
		}
		nav{
			text-align: center;
		}

		.botao{
			background-color: blue;
			padding: 10px 40px;
			border-radius: 10px;
			color: white;
			text-decoration: none;
		}

		.botao:hover{
			color: red;
		}


	</style>
</head>
<body>
	<?php	
		
		if (isset($_GET["numero"]) && isset($_GET["op"])) {

			$numero = isset($_GET["numero"])? $_GET["numero"]:0;
			$operador = isset($_GET["op"])? $_GET["op"]:1;
			$resultado =0;

			switch ($operador) {
				case 1:
					$resultado = $numero * 2;
					break;
				case 2:
					$resultado = pow($numero, 3);
					break;
				case 3:
					$resultado = sqrt($numero);
					break;
				
				default:
					
					break;
			}

			echo "<h1>O Resultado é: <span>$resultado</span></h1>";
		}else{
			echo "<h1><span>Coloque todos os valores do Formulário</span></h1>";
		}		
	?>
<nav>
	<a href="exercicio01.html" class="botao">Voltar</a>
</nav>
</body>
</html>