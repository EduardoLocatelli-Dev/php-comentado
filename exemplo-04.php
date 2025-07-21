<?php

$nome = (int)$_GET["a"];
//$_GET["a"] pega o valor a da URL ($_GET é um array super global)
// array super global são os nativos no
//(int) converte o valor para inteiro
//$nome = armazena o numero inteiro na variavel
//var_dump($nome);   var_dump mostra na tela o valor e o tipo
//echo mostra apenas o valor

$ip = $_SERVER["SCRIPT_NAME"];
//$_SERVER array com dados do servidor
//["SCRIPT_NAME"]	Caminho do arquivo PHP em execução

echo $ip;

 ?>