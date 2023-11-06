<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title><?php echo 'Aula 17-10-2022'; ?></title>
		<style type="text/css">
			
		</style>
	</head>
	
	<body>
		<?php
			/*$v = 1;
			while ($v >= 2) { - se a condição for verdadeira, ele continua - iniciar verdadeiro
				echo $v;
				$v--;
			}	
			
			$v = 2;
			while ($v >= 2) { 
				echo $v; 
				$v--;
			}
				
			$v = 1;
			do {
			   echo $v;
			   $v--;
			} while($v >= 2);	*/
			
		echo '<br>';
		
		/*	For ($i=0; $i < 5; $i++){
				echo $i; //Ele é 0, vira 1, 2, 3, 4, 5 não é menor que 5, então acaba
			}
			//Em while
			$i = 0;
			while ($i > 5){
				$i++;
			}
			
		echo '<br>';
		
			$v = 5;
			For($i=$v; $i <= 10; $i++){
				echo $i;
			}
			
		echo '<br>';
		
			$v = 4;
			$c = 8;
			For ($i=$v; $i <= $c; $i++){
				echo $i;
			}
			
		echo '<br>';*/
		
		$v = 10;
		while ($v > 0) { //Segue a sequencia
			echo $v;
			$v--;
			if ($v == 8){//Para no 8, sai fora - Mata aquele processo - 
						 //antes de enviar para o banco ou mostrar para o usuário
						 //Para que vai continuar, se já está com problema no começo
						 //Se colocar só o break, só passa uma vez
						 //Ex: fazer uma pesquisa
				break;//Faz sair da estrutura
			}
		}
		
		echo '<br>';
		
		$v = 0;
		while ($v <= 10){
			$v++;
			if (($v % 2)==1){//Cada produto que voce compra, vai dar meio meio desconto
						//Promoção - compra 10 pacotes tem desconto, passou disso não tem
				continue;//Mantem dentro da estrutura, mas quando chega nessa estrutura, 
						 //volta para o início - continua até chegar no final
			}
			echo $v;
		}
		
		echo '<br>';
		
		?>
		
	</body>	
</html>