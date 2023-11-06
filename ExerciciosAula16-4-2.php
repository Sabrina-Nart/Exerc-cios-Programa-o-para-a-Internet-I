<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Exercicios Aula 14/11/2022</title>
		<style type="text/css">

		</style>
	</head>

    <body>
		<?php
			$valor1 = $_POST['valor1'];
			$valor2 = $_POST['valor2'];
			$operacao = $_POST['operacao'];
			
			if($operacao == 'somar') {
				echo $valor1 + $valor2;
			} elseif($operacao == 'subtrair') {
				echo $valor1 - $valor2;
			} elseif($operacao == 'multiplicar') {
				echo $valor1 * $valor2;
			} elseif($operacao == 'dividir') {
				echo $valor1 / $valor2;
			}
		?>
	</body>
</html>


