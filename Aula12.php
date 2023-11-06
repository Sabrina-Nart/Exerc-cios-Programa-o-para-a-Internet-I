<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title><?php echo 'Aula 17-10-2022'; ?></title>
		<style type="text/css">
			
		</style>
	</head>
	
	<body>
		<?php
			
			//Ternário
			//Ternário e If pode fazer qualquer tipo de comparação
			
			$vl = 10;
			//$resultado = $vl == 10 ? 'Dez' : 'Diferente de dez'; //Armazena esse valor*/
			//echo $vl == 10 'Dez' : 'Diferente de dez';
			
			//echo $vl == 10 ? 'Dez' : ($vl >= 0 ? 'Positivo' : 'Negativo');
			
			echo $vl == 10 ? ($vl - 5) : ($vl + 5);
			echo '<br>';
			
//////////////////////////////////////////////////////////////
		//CERTAS
		
			$vl = 0;
			if ($vl > 0) {
				echo $vl;
			}
			
			echo '<br>';
			
			$vl = 0;
			if ($vl > 0) {
				echo $vl;
			} else {
				echo 'Não pode';
			}
			
			echo '<br>';
			
			$vl = 11;
			if ($vl >= 0 && $vl < 7) {
				echo 'Reprovado';
			} elseif ($vl >= 7 && $vl <= 10) {
				echo 'Aprovado';
			}
			
			echo '<br>';
			
		/////////////////////////
			$vl = 10;
			
			If ($vl > 0 && $vl < 7) {
				echo 'Reprovado';
			}elseif ($vl >= 7 && $vl <= 10){
				echo 'Aprovado';
			}
			echo '<br>';
		/////////////////////////
			$vl = 3;//Se sair desse limite, não mostra
			
			If ($vl > 0 && $vl < 7) {
				echo 'Reprovado';
			}elseif ($vl >= 7 && $vl <= 10){
				echo 'Aprovado';
			}else {
				echo 'Valor inválido';//Se sair desse limite, não mostra
			}
			echo '<br>';	
		/////////////////////////
			$vl = 9;
			
			//Só tem uma ação, por isso dá certo se tirar o {}
			If ($vl > 0 && $vl < 7) 
				//$txt = 'texto'; - sem chaves = erro
				echo 'Reprovado';
			elseif ($vl >= 7 && $vl <= 10)
				echo 'Aprovado';
			else 
				echo 'Valor inválido';
			
			echo '<br>';	

			$vl = 15;
			if ($vl >= 0 && $vl < 7)
				echo 'Reprovado';
			elseif ($vl >= 7 && $vl <= 10)
				echo 'Aprovado';
			else
				echo 'Valor inválido';
			
			echo '<br>';
			
			$vl = 15;
			If ($vl > 0 && $vl < 7){
				$txt = 'texto';//Dois valores, já tem que colocar o {}
				echo 'Reprovado';
			}elseif ($vl >= 7 && $vl <= 10)
				echo 'Aprovado';
			else 
				echo 'Valor inválido';
			
			echo '<br>';	
			
//////////////////////////////////////////////////////////////
		//Tem que dar ERRO
		
			//else {
			//	echo 'teste';
			//}
			
			//$vl = 15;
			//elseif($vl == 15) {
			//	echo 'teste';
			//}
			
			//$vl = 15;
			//if($vl == 15) {
			//	echo 'teste';
			//} else {
			//	echo 'teste';
			//} else {
			//	echo 'teste';
			//}
			
			//$vl = 15;
			//if($vl == 15) {
			//	echo 'teste';
			//} else {
			//	echo 'teste';
			//} elseif ($vl > 0) {
			//	echo 'teste';
			//}
			
			//$vl = 15;
			//if ($vl >= 0) && ($vl < 7) {
			//	echo 'Reprovado';
			//}
			
			//$vl = 15;
			//if ($vl => 0) {
			//	echo 'Reprovado';
			//}
		
			echo '<br>';
		
//////////////////////////////////////////////////////////////		
		//Switch - a ordem não importa - Sempre compara igualdade
		
			$v = 1;
			switch ($v) {
				case 1:
					echo 'Teste';
			}
		
			echo '<br>';
			
			$v = 2;
			switch ($v) {
				case 1:
					echo 'Um';
					break;
				case 2:
					echo 'Dois';
			}
			
			echo '<br>';
			
			$v = 7;
			switch ($v) {
				case 1:
					echo 'Um';
					break;
				case 2:
					echo 'Dois';
					break;
				default:
					echo 'Diferente';
			}
			
			echo '<br>';
			
			$v = 9;
			switch ($v) {
				case 1:
					echo 'Um';
					break;
				default:
					echo 'Diferente';
					break;
				case 2:
					echo 'Dois';
			}
			
			echo '<br>';
			
	/////////////////////////////////
		/*Forma Errada
		$v = 7;
		switch ($v) {
			case 1;
				echo 'Um';
				break;
			default:
				echo 'Diferente';
				break;
			default: - como se fosse um if - caso não tenha algo correspondente
				echo 'Diferente';
				break;
			case 2;
				echo 'Dois';
				break;*/
					
		echo '<br>';
		
		?>
		
	</body>	
</html>