<!DOCTYPE html>
<html>
<head>
	<title>Estruturas Condicionais - IF ELSE</title>
	<meta charset="utf-8">

	<style type="text/css">
		body{ background-color: #DDD; }
		main{ width: 950px; padding: 10px; margin: 0px auto; text-align: center; }
	</style>
</head>
<body>
	<main>

		<?php
			//Só valida se o usuário tentar entrar direto pela URL
			$nome = isset($_GET["nome"])? $_GET["nome"] : "Não informado";
			$ano = isset($_GET["ano"])? $_GET["ano"] : 1900; 

			$idade = date("Y") - $ano;
			$voto;

			if ($idade < 16) {
				$voto = "Não pode votar";
			}elseif($idade >= 18 && $idade < 60){
				$voto = "Obrigatório";
			}else{
				$voto = "Opcional";
			}

			echo "$nome tem $idade anos. <br>Voto: $voto.";
		?>
		
		<br><a href="exercicio01.html">Voltar</a>

	</main>
</body>
</html>