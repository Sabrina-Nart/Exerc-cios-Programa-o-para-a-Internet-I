<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Exercicios Aula 14/11/2022</title>
		<style type="text/css">

		</style>
		
	</head>
    <body>
		
		<?php
			if($_POST['nome'] != '' && 
			   $_POST['usuario'] != '' && 
			   $_POST['senha'] != ''){
		?>

		Nome: <?php echo $_POST['nome']; ?><br>
		Endereço: <?php echo $_POST['endereco']; ?><br>
		DDD: <?php echo $_POST['ddd']; ?><br>
		Telefone: <?php echo $_POST['telefone']; ?><br>
		Cidade: <?php echo $_POST['cidade']; ?><br>
		Estado: <?php echo $_POST['estado']; ?><br>
		Sexo: <?php echo $_POST['sexo']; ?><br>
		Usuário: <?php echo $_POST['usuario']; ?><br>
		Senha: <?php echo $_POST['senha']; ?><br>
		E-mail: <?php echo $_POST['email']; ?><br>
		Site: <?php echo $_POST['site']; ?><br>
		Comentário: <?php echo $_POST['comentario']; ?><br>
		
		<?php
			} else {
				echo 'Campos Nome, Usuário e Senha são obrigatórios!';
			}
		?>
		
	</body>
</html>

