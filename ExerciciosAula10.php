<!--No drive o arquivo está separado por questão-->
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title><?php echo 'Exercicio HTML x PHP'; ?></title>
		<style type="text/css">
			
		</style>
	</head>
	
	<body>
		<?php
		/*1 – Imprimir o resultado no título da página (aba).
		“Exercícios HTML x PHP”*/

//////////////////////////////////////////////////////////////////

		/*2 – Imprimir o resultado no título do texto. “PHP: Hypertext Preprocessor”*/

			/*<h3><?php echo 'PHP: Hypertext Preprocessor'; ?></h3>
			<?php echo '<h3>PHP: Hypertext Preprocessor</h3>'; ?>*/
			echo "<h3>PHP: Hypertext Preprocessor</h3>";
			
//////////////////////////////////////////////////////////////////
		
		/*3 – Armazenar o texto abaixo em uma variável e imprimir dentro de um parágrafo
		abaixo do título do texto:
		“A linguagem surgiu por volta de 1994, como um pacote de programas CGI criados
		por Rasmus Lerdorf, com o nome Personal Home Page Tools, para substituir um
		conjunto de scripts Perl que ele usava no desenvolvimento de sua página pessoal.”*/

			echo "<h3>Título</h3>";

			$texto = 'A linguagem surgiu por volta de 1994, como um pacote de programas CGI criados por Rasmus Lerdorf, com o nome Personal Home Page Tools, para substituir um conjunto de scripts Perl que ele usava no desenvolvimento de sua página pessoal.';
			echo $texto;

			$texto = 'A linguagem surgiu por volta de 1994, como um pacote de programas
			CGI criados por Rasmus Lerdorf, com o nome Personal Home Page Tools,
			para substituir um conjunto sw scripts Perl que ele usava no desenvolvimento
			de sua página pessoa.';
			
			echo "<p>{$texto}</p>";
			
			echo "<br>";

///////////////////////////////////////////////////////////////////

		/*4 – Armazenar em 4 variáveis o valor Inteiro, String, Decimal e Booleano e imprimir o
		resultado dentro de uma lista.*/
	
			$txt = 'texto';
			$int = 100;
			$dec = 3.7;
			$boo = true;
			
			echo "<br>";

///////////////////////////////////////////////////////////////////

		/*5 – Armazenar o valor 55 em uma variável, imprimir o resultado, armazenar o valor
		“Faculdades ESUCRI” na mesma variável e imprimir o resultado.*/	

			$valor = 55;
			echo $valor;
			$valor = 'Faculdades ESUCRI';
			echo $valor;

			echo "<br>";
			
/////////////////////////////////////////////////////////////////////

		/*6 – Criar uma constante chama “instituicao” que deve armazenar o valor “Faculdades
		ESUCRI” e imprimir o resultado*/

			define('instituicao', 'Faculdades ESUCRI');
			echo instituicao; //Pode criar em qualquer lugar, mas imprimir ter que ser depois

			echo "<br>";
			
//////////////////////////////////////////////////////////////////////

		/*7 – Criar 4 constantes e armazenar as seguintes informações Nome, Idade, Altura e 
		Peso. As informações devem ser exibidas em uma tabela.
		Nome: Cristiano
		Idade: 29
		Altura: 1,95m
		Peso: 99kg*/		

			define('Nome', 'Cristiano');
			define('Idade', '29');
			define('Altura', '1,95m');
			define('Peso', '99kg');
		
			echo "<br>";

//////////////////////////////////////////////////////////////////////

		/*8 – Criar duas variáveis um armazenará o seu nome e outro o sobrenome, 
		concatenar as duas variáveis e exibir o resultado.*/
		
			$nome = 'Cristiano';
			$sobrenome = 'Salomão';
			echo $nome . $sobrenome;
			echo $nome . ' ' . $sobrenome;
			echo "$nome$sobrenome"; //Não recomendo
			echo "$nome $sobrenome"; //Não recomendo
			echo "{$nome}{$sobrenome}";
			echo "{$nome} {$sobrenome}";

			echo "<br><br>";
			
//////////////////////////////////////////////////////////////////////

		/*9 - Concatene as duas frases abaixo em uma única variável e exiba o resultado
		dentro de um parágrafo.
		"Brasil, oficialmente República Federativa do Brasil, é o maior país da América do Sul
		e o quinto maior do mundo em área territorial e população, com mais de 192
		milhões de habitantes."
		"É o único país falante da língua portuguesa na América e o maior país lusófono do
		mundo, além de ser uma das nações mais multiculturais e etnicamente diversas do
		planeta, resultado da forte imigração vinda de muitos países."*/

		$v = 'Brasil oficialmente República Federativa do Brasil, é o maior país da 
			América do Sul e  quinto maior do mundo em área territorial e população, 
			com mais de 192 milhões de habitantes.';
			
		$v .='É o único país falante da língua portuguesa na América e o maior país 
			lusófono do mundo, além de ser uma das nações mais multiculturais e 
			etnicamente diversas do planeta, resultado da forte imigração vinda de 
			muitos países.';
		
		//echo '<p>' . $v . '</p>';
		
//////////////////////////////////////////////////////////////////////	

		/*10 – Com base na lista abaixo concatene todos os itens da tabela para chegar o valor
		informado, lembrando que estes dados devem estar armazenados dentro de variáveis.
		1 4 14
		Olá mundo Olá mundo
		24 horas 24 horas*/
		
		$V1 = 1;
		$V4 = 4;
		echo $V1 . $V4;
		echo "<br><br>";
		
		$O = 'Olá';
		$M = 'Mundo';
		echo "{$O} {$M}";
		echo "<br><br>";
		
		$V24 = 24;
		$H = 'Horas';
		echo "{$V24} {$H}";
		echo "<br><br>";
		
//////////////////////////////////////////////////////////////////////	

		/*11 – Criar as seguintes operações matemáticas:
		8 + 9 =?
		23 - 11 =?
		10 * 10 =?
		30 / 3 =?*/
		
		echo '8 + 9 = ' . (8 + 9) . '<br>';
		
		echo '23 - 11 = ' . (23 - 11) . '<br>';
		
		echo '10 * 10 = ' . (10 * 10) . '<br>';
		
		echo '30 / 3 = ' . (30 / 3) . '<br>';
		
		echo "<br>";
		
		echo '8 + 9 = ';
		echo 8 + 9;
		echo '<br><br>';

//////////////////////////////////////////////////////////////////////	

		/*12 – Sabendo que a área de um triangulo reto é base vezes altura dividido por 2
		calcule:
		Base Altura Área
		13 19 ?
		2 7 ?
		67 33 ?
		34 41 ?*/
		
		echo '(13 * 19) / 2 = ' . ((13 * 19) / 2) . '<br>';
		echo '(2 * 7) / 2 = ' . ((2 * 7) / 2) . '<br>';
		echo '(67 * 33) / 2 = ' . ((67 * 33) / 2) . '<br>';
		echo '(34 * 41) / 2 = ' . ((34 * 41) / 2) . '<br><br>';

//////////////////////////////////////////////////////////////////////

		/*13 – Criar uma função que irá concatenar e retornar o nome completo de um
		usuário, informando apenas 2 parâmetros nome e sobrenome.*/
		
		function concatenar($nome, $sobrenome) {
			return "{$nome} {$sobrenome}";
		}
		echo concatenar('Isadora', 'Comin Nart');
		
		echo '<br>';
			
//////////////////////////////////////////////////////////////////////

		/*14 - Criar uma função para cada operação matemática (somar, subtrair, dividir e
		multiplicar), que permitirá ao usuário informar 2 parâmetros que vão corresponder a
		dois valores numéricos. Deve ser calculado a lista a baixo:
		3 + 4 = ?
		5 * 4 = ?
		11 - 9 = ?
		20 / 4 = ?*/
		
		function somar($v1, $v2) {
			echo "{$v1} + {$v2} = " . ($v1 + $v2) . '<br>';
		}
		function subtrair($v1, $v2) {
			echo "{$v1} - {$v2} = " . ($v1 - $v2) . '<br>';
		}
		function multiplicar($v1, $v2) {
			echo "{$v1} * {$v2} = " . ($v1 * $v2) . '<br>';
		}
		function dividir($v1, $v2) {
			echo "{$v1} / {$v2} = " . ($v1 / $v2) . '<br>';
		}
		
		somar(3, 4);
		multiplicar(5, 4);
		subtrair(11, 9);
		dividir(20, 4);
			
		echo '<br>';
			
//////////////////////////////////////////////////////////////////////

	/* 15 – Criar uma função que irá atender a necessidade imposta no exercício 12.*/
	
		function area($b, $a) {
			echo ($b * $a) / 2;
		}
		
		area(13, 19);
		echo '<br>';
		area(2, 7);
		echo '<br>';
		area(67, 33);
		echo '<br>';
		area(34, 41);
		echo '<br>';
		
//////////////////////////////////////////////////////////////////////
	?>

<!--4------------------------------------------------------------->
		
		<ul>
			<li><?php echo $txt; ?></li>
			<li><?php echo $int; ?></li>
			<li><?php echo $dec; ?></li>
			<li><?php echo $boo; ?></li>
		</ul>

		<ul>
			<?php 
				echo "<li>{$txt}</li>";
				echo "<li>{$int}</li>";
				echo "<li>{$dec}</li>";
				echo "<li>{$boo}</li>";
			?>
		</ul>

		<ul>
			<?php 
				echo "<li>{$txt}</li>
				<li>{$int}</li>
				<li>{$dec}</li>
				<li>{$boo}</li>";
			?>
		</ul>
		
<!--7------------------------------------------------------------->
		
		<table>
			<tbody>
				<tr>
					<td>Nome:</td>
					<td><?php echo Nome; ?></td>
				</tr>
				<tr>
					<td>Idade:</td>
					<td><?php echo Idade; ?></td>
				</tr>
				<tr>
					<td>Altura:</td>
					<td><?php echo Altura; ?></td>
				</tr>
				<tr>
					<td>Peso:</td>
					<td><?php echo Peso; ?></td>
				</tr>
			</tbody>
		</table>
		
<!---9------------------------------------------------------------>

		<p><?php echo $v; ?></p>

<!--------------------------------------------------------------->

	</body>
</html>
