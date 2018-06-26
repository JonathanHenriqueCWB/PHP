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

		$d = isset($_GET["ds"])? $_GET["ds"]:0;
		switch ($d) {
		 	case 2:
		 	case 3:
		 	case 4:
		 	case 5:
		 	case 6:
		 		echo "<h1>Dia de Semana</h1>";
		 		break;

		 	case 7:
		 	case 1:
		 		echo "<h1>Final de Semana</h1>";
		 		break;
		 	default:
		 		echo "<h1>Dia Semana Invalido</h1>";
		 		break;
		 } 


	?>
	<nav>
		<a href="exercicio02.html" class="botao">Voltar</a>
	</nav>
</body>
</html>