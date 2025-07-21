<?php

$nome = "Hcode"; // retorna valor e texto
$site = 'www.hcode.com.br'; // retorna apenas texto

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
/*array guarda um valor e pode acessar esses valores por um numero (indice)
ou por um nome (chave). Como uma caixa com divisórias.*/
//echo $frutas[2];

$nascimento = new DateTime();
//Cria um objeto de data e hora atual no PHP

//var_dump($nascimento);
///////////////////////////////////////

$arquivo =fopen("exemplo-03.php", "r");
/*fopen() é uma função do PHP usada para abrir um arquivo.

"exemplo-03.php" é o nome do arquivo que você quer abrir.

"r" é o modo de abertura — neste caso, "read" (leitura).*/

//var_dump($arquivo);

$nulo = NULL;  //ausencia de valor, como se não existisse
$vazio = "";  //ausencia de informação, existe só esta vazia

?>