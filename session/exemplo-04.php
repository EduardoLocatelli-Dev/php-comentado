<?php 

session_id('9kvl7ucpd9lcbhgau8sgbfgq7');
//este é o ID unico do usuario.
require_once("config.php");
//require_once chama outro arquivo PHP.
session_regenerate_id();
//sempre gera um ID novo sempre que acessa a pagina ou da F5.
echo session_id();

var_dump($_SESSION);
//var_dump exibe o tipo, o tamanho e valor da variavel.
?>