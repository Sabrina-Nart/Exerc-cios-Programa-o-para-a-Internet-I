<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title><?php echo 'Exercícios Aula 17-10-2022 - Funções; '?></title>
		<style type="text/css">

			.verde {
				color: green;
			}
			.azul {
				color: blue;
			}
			.amarelo {
				color: yellow;
			}
			.vermelho {
				color: red;
			}	

		</style>
	</head>
	
	<body>
		<?php
		
//////////////////////////////////////////////////////////////////////

			/*1 - Defina um valor para uma variável e incremente 3x exibindo 
			o valor anterior e o resultado dentro de uma tabela, conforme o exemplo.

			Anterior  Atual
			10			11
			11			12*/
			
			$v = 10;

			echo '<br>';
			
//////////////////////////////////////////////////////////////////////

			/*2 - Realizar a mesma operação do exercício anterior, porém o valor irá 
			decrementar 3x e exibir o valor anterior e o resultado dentro de uma tabela.*/
			
			$v = 10;

			echo '<br>';

//////////////////////////////////////////////////////////////////////		
		
			/*3 - Realizar os seguintes cálculos utilizando um operador de atribuição, 
			utilizando apenas uma variável para gerar o resultado de cada operação:

			5 + 10 = ?
			10 / 2 = ?
			8 * 3 = ?
			12 - 9 = ?
			11 + 10 = ?
			50 / 8 = ?
			14 * 15 = ?
			17 - 50 = ?*/

			$v = 5;
			$v += 10;
			echo "5 + 10 = {$v}<br>";
			
			$v = 10;
			$v /= 2;
			echo "10 / 2 = {$v}<br>";
			
			$v = 8;
			$v *= 3;
			echo "8 * 3 = {$v}<br>";
			
			$v = 12;
			$v -= 9;
			echo "12 - 9 = {$v}<br>";
			
			$v = 11;
			$v += 10;
			echo "11 + 10 = {$v}<br>";
			
			$v = 50;
			$v /= 8;
			echo "50 / 8 = {$v}<br>";
			
			$v = 14;
			$v *= 15;
			echo "14 * 15 = {$v}<br>";
			
			$v = 17;
			$v -= 50;
			echo "17 - 50 = {$v}<br>";

			echo '<br>';

//////////////////////////////////////////////////////////////////////		

			/*4 - Utilizando uma operação ternária verifique se os alunos a 
			seguir foram aprovados ou não na matéria, lembrando que para 
			aprovação os mesmos devem ter uma média igual ou superior a 7.

			Anderson	8.0
			Roberto	6.0
			Augusto	9.0
			Luiz		7.0
			Andréia	8.0
			Flavia		6.9
			Marcia		7.0
			Antonio	3.8
			Rodrigo	6.3	*/	
			
			echo 'Anderson 8.0 ' . (8 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';
			
			echo 'Roberto 6.0 '; 
			echo 6 >= 7 ? 'Aprovado' : 'Reprovado';
			echo '<br>';
			
			$v = 9;
			echo 'Augusto 9.0 '; 
			echo $v >= 7 ? 'Aprovado' : 'Reprovado';
			echo '<br>';

			echo 'Luiz 7.0 ' . (7 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';
			echo 'Andréia 8.0 ' . (8 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';
			echo 'Flavia 6.9 ' . (6.9 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';
			echo 'Marcia 7.0 ' . (7 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';
			echo 'Antonio 3.8 ' . (3.8 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';
			echo 'Rodrigo 6.3 ' . (6.3 >= 7 ? 'Aprovado' : 'Reprovado') . '<br>';

			echo '<br>';

//////////////////////////////////////////////////////////////////////	

			/*5 – Criar uma variável que irá receber um valor numérico, conforme o valor deve ser
			trocada a cor do texto “Faculdades ESUCRI”. Utilizar a estrutura de condição IF...ELSE.
			Valor Cor
			1 Verde
			2 Azul
			3 Amarelo
			4 Vermelho*/
				
			$v = 4;

			if ($v == 1) {
				$class = 'verde';
			} elseif ($v == 2) {
				$class = 'azul';
			} elseif ($v == 3) {
				$class = 'amarelo';
			} elseif ($v == 4) {
				$class = 'vermelho';
			}		

			echo '<br>';

//////////////////////////////////////////////////////////////////////

			/*6 – Criar dois parágrafos que contenha os textos a baixo e através e uma variável seja
			possível exibir através do valor “1” o 1º parágrafo, do valor “2” o 2º parágrafo e caso
			seja informado outro valor ou nenhum valor deve ser exibido ambos os parágrafos.
			1º parágrafo - “Em 1997 foi lançado o novo pacote da linguagem com o nome
			de PHP/FI, trazendo a ferramenta Forms Interpreter, um interpretador de comandos
			SQL.”
			2º parágrafo - “Mais tarde, Zeev Suraski desenvolveu o analisador do PHP 3 que
			contava com o pri
			meiro recurso de orientação a objetos, que dava poder de alcançar
			alguns pacotes, tinha herança e dava aos desenvolvedores somente a possibilidade de
			implementar propriedades e métodos.”*/	
		
			$v = 3;

			if ($v != 2) {
				echo "<p>Em 1997 foi lançado o novo pacote da linguagem com o nome de PHP/FI, 
				trazendo a ferramenta Forms Interpreter, um interpretador de comandos SQL.</p>";
			}

			if ($v != 1) {
				echo "<p>Mais tarde, Zeev Suraski desenvolveu o analisador do PHP 3 que 
				contava com o primeiro recurso de orientação a objetos, que dava poder de 
				alcançar alguns pacotes, tinha herança e dava aos desenvolvedores somente 
				a possibilidade de implementar propriedades e métodos.</p>";
			}

			echo '<br>';

//////////////////////////////////////////////////////////////////////	

			/*7 – Criar uma função e usar switch para verificar qual retorno deve ser exibido
			conforme os valores informados na tabela a baixo:
			Variável Retorno
			1 Pera
			2 Maça
			3 Uva
			4 Laranja*/

			function fruta($v){
				switch($v){
					case 1:
					 	return 'Pera';
						
					case 2:
						return 'Uva';
						
					case 3:
						return 'Maçã';
						
					case 4:
						return 'Laranja';
					}
				}

				echo fruta(4);
			
			echo '<br><br>';

//////////////////////////////////////////////////////////////////////	

			/*8 – Usando while crie um contador que exiba o valor de 1 até 30 mostrando a seguinte
			mensagem:
			“Estamos no número X.”*/

			$v =1;

			while($v<=30){
				echo"Estamos no número: {$v} <br>";
				$v++;		
			}

			echo '<br>';

//////////////////////////////////////////////////////////////////////			

			/*9 – Criar uma tabela usando while para exibir cada linha, cada linha terá um valor que
			deve iniciar no número 1 e encerar no numero 10, porem a tabela deve exibir o
			resultado de maneira zebrada, ou seja, uma linha deve exibir o fundo de uma cor e a
			próxima com uma outra cor, realizando esse processo repetidamente.*/

			
			for($v =30; $v > 0; $v--){
				echo"Estamos no número{$v} <br>";
			} 
			
			echo '<br>';

			
			for($v =0; $v <=30; $v++){
				if(($v %2)==0){
					echo"---";
				}
			}
	
			echo '<br>';

//////////////////////////////////////////////////////////////////////	

			/*9 – Criar uma tabela usando while para exibir cada linha, cada linha terá um valor que
			deve iniciar no número 1 e encerar no numero 10, porem a tabela deve exibir o
			resultado de maneira zebrada, ou seja, uma linha deve exibir o fundo de uma cor e a
			próxima com uma outra cor, realizando esse processo repetidamente. */
			
			//Linha zebrada é quando tem uma linha de uma cor e outra de outra
/*
			<table>
				<tbody>
					<?php
						for($i = 1; $i <= i++){

						$class = '';
						if ($i % 2 == 0){
							$class = 'cinza';
						}
					?>
					<tr>
						<td class="<?php echo $class; ?>"<?php echo 
					</tr>
				</tbody>
			</table>*/			

//////////////////////////////////////////////////////////////////////	

		?>
<!--1------------------------------------------------------------->		
			<table>
				<thead>
					<tr>
						<th>Anterior</th>
						<th>Atual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $v; ?></td>
						<td><?php echo ++$v; ?></td>
					</tr>
					<tr>
						<td><?php echo $v++; ?></td>
						<td><?php echo $v; ?></td>
					</tr>
					<tr>
						<td><?php echo $v++; ?></td>
						<td><?php echo $v; ?></td>
					</tr>
				</tbody>
			</table>
		
<!--2------------------------------------------------------------->	
	
			<table>
				<thead>
					<tr>
						<th>Anterior</th>
						<th>Atual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $v; ?></td>
						<td><?php echo --$v; ?></td>
					</tr>
					<tr>
						<td><?php echo $v--; ?></td>
						<td><?php echo $v; ?></td>
					</tr>
					<tr>
						<td><?php echo $v--; ?></td>
						<td><?php echo $v; ?></td>
					</tr>
				</tbody>
			</table>
		
<!--5------------------------------------------------------------->	

			<p class="<?php echo $class; ?>">Faculdades ESUCRI</p>

<!--------------------------------------------------------------->	

<!--------------------------------------------------------------->				
	</body>	
</html>
