<!DOCTYPE html>

<html lang="pt-br">
        <head>
	        <title><?php echo 'Aula 31-10-2022'; ?></title>
		<style type="text/css">
			
		</style>
	</head>
	
	<body>
		<?php

            //Tem que armazenar em alguma  variável, se não, não consegue utilizar
            $lista = array(34 => 'Gato', 12 => 'Cachorro');
            //echo $lista; //Essa variável se tornou um array
            echo $lista[12]; //Se botar outro valor, tipo o 58, vai aparecer que aquele valor, não existe dentro do índice

            echo '<br><br>';

    /////////////////////////////////

            //Algum texto para referenciar aquela informação
            $lista = array('felino' => 'Gato', 'canino' => 'Cachorro');
            echo $lista['Felino'];

            echo '<br><br>';

    /////////////////////////////////

            $Lista = array('Gato', 'cachorro');
            echo $Lista[1];

            echo '<br><br>';

    /////////////////////////////////

            $lista[34] = 'Gato';
            $lisra[12] = 'Cachorro';
            echo $lista[34];

            echo '<br><br>';

    /////////////////////////////////

            $lista['felino'] = 'Gato';
            $lista['canino'] = 'Cachorro';
            echo $lista['canino'];

            echo '<br><br>';

    /////////////////////////////////

            //O primeiro informado escarta do índice zero
            $lista[] = 'Gato';
            $lista[] = 'Cachorro';
            echo $lista[1];

            echo '<br><br>';

    /////////////////////////////////

            $lista[25] = 'Gato';
            $lista['canino'] = 'Cachorro';
            $lista[] = 'Vaca';
            echo $lista[26]; 

            echo '<br><br>';

    /////////////////////////////////
            
            //Indice Associativo
            $lista['felino'] = 'Gato';
            $lista['canino'] = 'Cachorro';
            $lista[] = 'Vaca';    
            echo $lista[0];

            echo '<br><br>';

    /////////////////////////////////
            
            $lista[19][8] = 'Café';
            echo $lista[19][8];

            echo '<br><br>';
            
    /////////////////////////////////
            
            $lista = array(19 => array(7 => 'Leite'));
            echo $lista[19][7];

            echo '<br><br>';
            
    /////////////////////////////////
            
            //Junta os dois de cima
            $lista[19] = array(9 => 'Café');
            echo $lista[19][9];

            $lista = array(
                        array('Faca'),
                        array('Garfo')
                    );
            echo $lista[0][0];
            echo $lista[1][0];   

            echo '<br><br>';
            
    /////////////////////////////////
            
            $lista = array(
                array('Faca','Garfo')
            );
            echo $lista[0][0];
            echo $lista[0][1];   

            echo '<br><br>';
            
    /////////////////////////////////
            
            $lista[][] = 'Lápis';
            $lista[][] = 'Caneta';
            echo $lista[0][0];
            echo $lista[1][0];

            echo '<br><br>';
            
    /////////////////////////////////
            
            //Quando não coloca nada dentro do [], ele entende que está colocando um novo
            $lista[][] = 'Lápis';
            $lista[0][] = 'Caneta';
            echo $lista[0][0];
            echo $lista[0][1];        
            
            echo '<br><br>';
            
    /////////////////////////////////

            //Função que serve para auxiliar no entendimento de como está arquitetado o array
            //Não é para usar para mostrar para o usuário
            //Fica mais prático para entender - ferramenta de apoio no desenvolvimento
            //Principalmente quando quer entender os dados que vem do Banco ou de uma API
    
            $lista = array(4 => array ('teste' => 45), 12 => array('cliente' => array(12, 20000)), 'status' => 'ativo');
            echo '<pre>'; //formato de árvore - abrir antes do print_r e fechar depois
            print_r($lista);
            echo '</pre>';

            echo '<br>';

            echo $lista[12]['cliente'][0];
            echo $lista[4]['teste'];

            echo '<br>';

            echo $lista['status'];

            echo '<br><br>';

    /////////////////////////////////
            
            //Quantos itens tem dentro do array
                        //Esse é um item           -   Esse é outro    
            $lista = array(4 => array ('teste' => 45), 12 => array('cliente' => array(12, 20000)), 'status' => 'ativo');
            //echo count($lista)//Retorno 3 
            echo count($lista[4]);//Retorna 1, porque só tem um valor
            echo count($lista[12]);//Cliente e o array associado a ele
            echo count($lista[12]['cliente']);//Dentro dele tem 2 valores

            echo '<br><br>';
            
    //////////////////////////////////

            $lista = array(12, 34, 67, 89);//Lista gerada de maneira automática - funciona de for assim, não funcionaria se fosse numérica
            for($i = 0; $i < count($lista); $i++){
                echo $lista[$i] . '<br>';//Pega essa informação, converte o valor da variável para o índice - quando virou 4, saiu fora da estrutura de repetição
            }

            echo '<br><br>';

    /////////////////////////////////

            //sort() - organizar de acordo com os valores - reorganiza os índices de maneira altomática
            //reorganiza os itens, mas o indice se mantem
            //Manteve as referências
            //Só exibir informação - se tiver interação com o usuário, ele não cabe bem
           
            $lista = array(12, 89, 't' => 34, 69);
            echo '<pre>';
            print_r($lista);
            echo '<pre>';
            sort($lista);
            asort($lista);//Maneira crescente
            rsort($lista);//Maneira descrescente
            arsort($lista);
            echo '<pre>';
            print_r($lista);
            echo '<pre>';

            echo '<br>';

            $lista = array('KIA', 'GM', 'FORD', 'FIAT');
            sort($lista);
            rsort($lista);
            echo '<pre>';
            print_r($lista);
            echo '</pre';

            echo '<br><br>';

    /////////////////////////////////
        
            //Validar se o indice existe - pode dar alguma mensagem, etc
            $lista = array('fruta' => 'Maça', 'suco' => 'Uva', 'texto' => 'Olá');
            if(isset($lista['texto'])){
                echo $lista['texto'];
            }

            echo '<br><br>';
            
    /////////////////////////////////
            /*
            $lista = array('fruta' => 'Maça', 'suco' => 'Uva', 'texto' => 'Olá');
            echo $lista['texto'];//Removeu
            unset($lista['texto']);//Indicar qual indice eu quero remover do array
            echo $lista['texto'];//Aqui da erro, porque já foi removido
            
            echo '<br>';
            */
    /////////////////////////////////
            
            $lista = array('fruta' => 'Maça');
            echo '<pre>';
            print_r($lista);
            echo '<pre>';
            array_push($lista, 'Uva', 'Laranja', 'Pera');//Pode ter o array pronto e vazer a ação
            echo '<pre>';
            print_r($lista);
            echo '</pre>';

            echo '<br><br>';
            
    /////////////////////////////////

            //FOREACH - É recomendado quando tem uma estrutura de Array
            //Ou pega o valor ou o índice e o valor

            //Quando quer só os valores
            $lista = array('fruta' => 'Maça', 'suco' => 'Uva', 'texto' => 'Olá');
            foreach($lista as $valor){//Qual variável vai receber esse valor - pega o valor e associa a variável
                echo "{$valor} <br>";
            }

            echo '<br>';

            //Precisso do indice e vou precissar mostrar ou tratar ele
            $lista = array('fruta' => 'Maça', 'suco' => 'Uva', 'texto' => 'Olá');
            foreach($lista as $indice => $valor){
                echo "{$indice} => {$valor} <br>";
            }     

            echo '<br>';

            //Quando ter um array munti-dimenssional
            $lista = array(
                array('Cristiano', '29', 'SC'),
                array('Marcela', '20', 'RS'),
                array('Paulo', '15', 'PR')
            );
            foreach($lista as $valor){
                echo "{$valor[0]} - {$valor[1]} - {$valor[2]}<br>";
            }

            echo '<br>';

            echo '<table><tbody>';
            foreach($lista as $valor){
                echo '<tr>';
                foreach($valor as $item){
                    echo "<td>{$item}</td>";
                }
                echo '</tr>';
            }
            echo '</table></tbody>';

            echo '<br><br>';

    /////////////////////////////////

        ?>
		
	</body>	
</html>