<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Exercicios Aula 14/11/20221</title>
		<style type="text/css">
		</style>
	</head>
	
	<body>
		<?php
			$usu = $_GET['usuario'];
			$sen = $_GET['senha'];
			if($usu == 'admin' && $sen == '123') {
				echo 'Login realizado com sucesso!';
			} else {
				echo 'Usuário ou senha inválida!';
			}
		?>
	</body>
</html>