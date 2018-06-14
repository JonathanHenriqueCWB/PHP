<!DOCTYPE html>
<html>
<head lang="pt-br">
	
	<?php

		$txt = isset($_GET["t"])? $_GET["t"] : "Texto não informado";
		$tam = isset($_GET["tam"])? $_GET["tam"] : "12pt";
		$cor = isset($_GET["cor"])? $_GET["cor"] : "#000000";

	?>

	<title>Formulários</title>
	<meta charset="utf-8">
	<style type="text/css">
		.text{

			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>; 
		}
	</style>
</head>
<body>
	<?php
		
		echo "<span class='text'>$txt</span>"
	?>
</body>
</html>

