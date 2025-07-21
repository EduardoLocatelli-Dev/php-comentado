<?php

$nome = "Glaucio";

function teste() {
/*function é um bloco de codigo reutilizavel 
que pode ser executado usando o nome da function*/
     global $nome; //global serve para acessar uma variavel criada fora da function
     echo $nome;

}

function teste2() {

	$nome = "João";

      echo $nome. " agora no teste2";

}

teste(); //é assim que se chama uma function

teste2(); //é assim que se chama uma function
?>