<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Esucri 10-10-2022</title>
		<style type="text/css">

			
		</style>
	</head>
	
	<body>
		<?php
			function teste1() {
				return 100;//Retornar um valor
			}
			echo teste1();
			
			function teste2() {
				
			}
			echo teste2();
			
			function teste3() {
				echo "teste"; //Imprimir alguma ação dentro dela
			}
			teste3();
			
			function teste4($v, $t) {//Só existe dentro desse contexto
				echo $v + $t;
			}
			teste4(5, 7);
		?>

	</body>	
</html>

<!--O valor de v2 nunca muda, o que muda é o valor do v1
Se eu coloco o ++ na frente, ele executa a operação e depois a ação sda linha,
	se colocar depois, primeiro executa a linha, depois a operação
-1 = ++valor
0 = valor++
Nao pode ter espaço
Refatoração = avaliar o código e ver como pode deixar melhor - Ex: locais diferentes
	fazendo a mesma coisa - pego aquela ação e depois chamo ela onde eu quero 
Função - pedaço daquele código, que pode ser utilizado em outros lugares - declara 
	a variável dentro da função, só existe aqui dentro - posso ou não devolver algo
teste1(), precissa entender que é uma função
Função Recursiva = uma função chama ela mesma - hoje não mais muito usado - 
	cuidar para não entrar em loop-->