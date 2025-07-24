<?php 

function __autoload($nomeClass){
// Função __autoload é chamada automaticamente quando uma classe é usada mas ainda não foi incluída.

	//var_dump($nomeClass);
	require_once("$nomeClass.php");
// Inclui automaticamente o arquivo com o nome da classe (DelRey.php)
}

$carro = new DelRey();
// Cria um novo objeto da classe DelRey.
$carro->acelerar(80);
// Chama o método acelerar do objeto $carro, passando a velocidade 80
?>