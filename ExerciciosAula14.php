<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title><?php echo 'Exercicios Aula 31-10-2022'; ?></title>
		<style type="text/css">

		</style>
	</head>

        <body>
	<?php

//////////////////////////////////////////////////////////////////////

                /*1 – Criar um array com os seguintes dados:
                        Índice Valor
                        3 Fruta
                        Texto Olá Mundo
                        44 Verde
                        Info ESUCRI
                        Após criar o array devesse exibir todo o seu conteúdo um a um.*/ 
                
                $lista[3] = 'Fruta';
                $lista['Texto'] = 'Olá Mundo';
                $lista[44] = 'Verde';
                $lista['Info'] = 'ESUCRI';
                
                echo '<br>';

                $lista = array(3 => 'Fruta', 'Texto' => 'Olá Mundo', 44 => 'Verde', 'Info' => 'ESUCRI');

                echo '<br>';

                echo $lista[3] . '<br>';
                echo $lista['Texto'] . '<br>';
                echo $lista[44] . '<br>';
                echo $lista['Info'] . '<br>';
                
                echo '<br>';

//////////////////////////////////////////////////////////////////////
                /*2 – Criar um array com os seguintes dados:
                        Frutas
                        Cambuci
                        Jambo amarelo
                        Mexerica
                        Avocadoe
                        Jambo branco
                        Mexerica Rio
                        Abacaxi
                        Caqui chocolate
                        Jambo rosa
                        Morango
                        Exibir os valores em ordem alfabética um a um.*/

                $lista = array('Frutas',
                                'Cambuci',
                                'Jambo Mexicano',
                                'Mexerica',
                                'Avocadoe',
                                'Jambo Branco',
                                'Mexerica Rio',
                                'Abacaxi',
                                'Caqui chocolate',
                                'Jambo Rosa',
                                'Morango'
                        );

                echo "{$lista[6]}<br>";
                echo "{$lista[3]}<br>";
                echo "{$lista[0]}<br>";
                echo "{$lista[7]}<br>";
                echo "{$lista[1]}<br>";
                echo "{$lista[4]}<br>";
                echo "{$lista[8]}<br>";
                echo "{$lista[2]}<br>";
                echo "{$lista[9]}<br>";

                echo '<br>';

//////////////////////////////////////////////////////////////////////
                /*3 – Criar um array multidimensional onde iremos gravar dados de alunos:
                        Nome, telefone, turma e fase.
                        Cadastre pelo menos 10 alunos e utilizando a função print_r e a tag <pre>
                        exiba os resultados que contêm este array.*/

                $dados = array('Nome' =>'Sabrina Nart', 'Telefone' => '(48) 99864-1957', 'turma' => 'SI', 'Fase' => '4°',
                                'Nome' =>'Manuella', 'Telefone' => '(48) 99568-2585', 'turma' => 'Biomediscina', 'Fase' => '4°',
                              );

                echo '</pre>';
                print_r($dados);
                echo '</pre>';

                echo '<br><br>';

//////////////////////////////////////////////////////////////////////
                /*4 – Criar o seguinte array e através da estrutura de repetição FOR ou
                        WHILE vamos mostrar os dados contidos dentro dele.
                        Frutas
                        Cambuci
                        Jambo amarelo
                        Mexerica
                        Avocadoe
                        Jambo branco
                        Mexerica Rio
                        Abacaxi
                        Caqui chocolate
                        Jambo rosa
                        Morango*/

		$lista[] = 'Cambuci';
		$lista[] = 'Jambo amarelo';
		$lista[] = 'Mexerica';
		$lista[] = 'Avocado';
		$lista[] = 'Jambo branco';
		$lista[] = 'Mexerica Rio';
		$lista[] = 'Abacaxi';
		$lista[] = 'Caqui chocolate';
		$lista[] = 'Jambo rosa';
		$lista[] = 'Morango';
			
		for($i = 0; $i < count($lista); $i++) {
			echo "{$lista[$i]}<br>";
		}
			
		$i = 0;
		while($i < count($lista)) {
			echo "{$lista[$i]}<br>";
				$i++;
		}
			
		foreach($lista as $valor) {
			echo "{$valor}<br>";
		}
                        
                 echo '<br>';

//////////////////////////////////////////////////////////////////////
                /*5 – Criar um array multidimensional com base na tabela abaixo, utilizando
                        a estrutura de repetição FOR ou WHILE vamos exibir os dados dentro de
                        uma tabela.
                        Código Produto Loja Pontos Valor
                        3 Shopnotesul 123 350,00
                        34 Shop internacional 5345 511,00
                        76 Ideal Eletronicos 234 375,00
                        71 Território da Informática 34 344,00
                        234 Balão da informática 786 477,00*/

		$lista = array(
			array('codigo' => 3,
			'loja' => 'Shopnotesul',
			'valor' => '350,00'),
			array('codigo' => 34,
			'loja' => 'Internacional Shop',
			'valor' => '511,00'),
			array('codigo' => 76,
			'loja' => 'Ideal Eletronicos',
			'valor' => '375,00')
		);

                echo '<br>';

//////////////////////////////////////////////////////////////////////
                /*6 – Ordene o conteúdo da lista abaixo de maneira crescente sem perder a
                        referência dos índices. Utilizando uma estrutura de repetição exiba os
                        dados dentro de uma tabela.
                        Bogs mais visitados
                        kibeloco.com.br
                        nãosalvo.com.br
                        naointendo.com.br
                        minilua.com
                        gizmodo.com.br
                        blogdocupom.com.br
                        sempretops.com
                        tecnoblog.net
                        ahnegão.com.br
                        blogdojuca.uol.com.br*/

		$lista = array(
			'kibeloco.com.br',
			'nãosalvo.com.br',
			'naointendo.com.br',
			'minilua.com',
			'gizmodo.com.br',
			'blogdocupom.com.br',
			'sempretops.com',
			'tecnoblog.net',
			'ahnegão.com.br',
			'blogdojuca.uol.com.br'
		);

		asort($lista);

                echo '<br><br>';

//////////////////////////////////////////////////////////////////////
                /*7 – Com base na lista abaixo vamos ordenar os itens em ordem
                decrescente podendo perder a referência do índice. Utilizando uma
                estrutura de repetição vamos exibir os dados dentro de uma lista.
                Top 10 Cinema
                Atividade Paranormal 4
                Hotel Transilvânia
                Até Que a Sorte Nos Separe
                Ted
                Busca Implacável 2
                A Entidade
                Intocáveis
                Procurando Nemo 3D
                Os Infratores
                As Vantagens de Ser Invisíve*/
/*
                $lista = array(
                        'Atividade Paranormal 4',
                        'Hotel Transilvânia',
                        'Até Que a Sorte Nos Separe',
                        'Ted',
                        'Busca Implacável 2',
                        'A Entidade',
                        'Intocáveis',
                        'Procurando Nemo 3D',
                        'Os Infratores',
                        'As Vantagens de Ser Invisível'
                );

                rsort($lista);  
        */
        ?>
        
<!--6------------------------------------------------------------->		
		<table>
			<thead>
				<tr>
					<th>Bogs mais visitados</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($lista as $valor) {
				?>
				<tr>
					<td><?php echo $valor; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

<!--7------------------------------------------------------------->
                <table>
			<thead>
				<tr>
					<th>Top 10 Cinema</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($lista as $valor) {
				?>
				<tr>
					<td><?php echo $valor; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

<!---------------------------------------------------------------->                
	</body>
</html>