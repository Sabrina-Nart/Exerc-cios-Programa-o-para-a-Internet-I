<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Esucri 03-10-2022</title>
		<style type="text/css">

			
		</style>
	</head>
	
	<body>
		<?php
			echo "<h3>Boa noite</h3>";
			//<h3></h3> Não posso inserir HTML diretamente dentro do php
			/*Comentários em linhas
				1
				2
				3
				4*/
			//Pode colocar comentários, que não aparecer
			//Se não tiver o $ na frente, entende que é uma constante, não declaração de variável
			$texto = "texto";
			$inteiro = 10;
			$decimal = 2.6;
			$booleano = true;
			echo $decimal;
			echo "<br>";
			//Constante = sempre em letra maiúscula - usado quando tem algo que não muda
			//A constante só aceita um texto ou um valor númerico
			echo PHP_VERSION;
			echo "<br>";
			
			define('faculdade', 'Esucri');//Não podemos usar caracter especial
			
			echo faculdade;
			echo "<br>";
			
			echo $texto . $inteiro . "<br>";
			echo $texto . ' ' . $inteiro . "<br>";
			
			echo '$texto $decimal <br>';//Imprime literalmente o que está escrito 
			echo "{$texto} {$decimal} <br>";//Imprime o conteúdo da variável
			echo "$inteiro a $texto <br>";//O professor não usa assim
			echo "{$texto} {$decimal} <br>";
			
			$vl1 = 5;
			$vl2 = 10;
			
			echo 5 + 10;
			echo "<br>";
			
			echo 5 - 10;
			echo "<br>";

			echo 5 * 10;
			echo "<br>";

			echo 5 / 10;
			echo "<br>";
			
			echo 5 % 10;
			echo "<br>";	

			echo 5 + 10 . '<br>';
			
			echo '50' + 10 . '<br>';//Verifica se é numérico - caracter por caracter	
			echo '50' + '15' . '<br>';//Primeiro concatena e depois soma
			echo '50a' + 7 . '<br>';//Desse ponto para trás, ignora
			echo 'a50' + 30 . '<br>';//Como começou com letra, considerou como 0 + 30
			echo 'Total:'. ('50' + 30). '<br>';//Utilizar texto com número ()
		?>
		<!--Se deixar dentro, é mais coisa para processar - o PHP processa-->		
		<p><?php echo $vl1 + $vl2; ?></p><!--Deixar fora, quem processa é o HTML-->
	</body>	
</html>