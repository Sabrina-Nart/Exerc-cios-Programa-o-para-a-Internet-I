<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Exercicios Aula 14/11/2022</title>
		<style type="text/css">

		</style>
	</head>

        <body>
		
			<form action="ExerciciosAula16-3-3.php" method="post">
			
				<input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
				
				<input type="hidden" name="usuario" value="<?php echo $_POST['usuario'];?>">
				
				<input type="hidden" name="senha" value="<?php echo $_POST['senha']; ?>">
				
				<label for="endereco">Endereço</label><br>
				<input type="text" name="endereco" id="endereco"><br><br>
				
				<label for="cidade">Cidade</label><br>
				<input type="text" name="cidade" id="cidade"><br><br>
				
				<label for="estado">Estado</label><br>
				<input type="text" name="estado" id="estado"><br><br>
				
				<label for="comentario">Comentário</label><br>
				<textarea name="comentario" id="comentario"></textarea><br><br>
							
				<button type="submit">Enviar</button>
			</form>

		</body>
</html>


