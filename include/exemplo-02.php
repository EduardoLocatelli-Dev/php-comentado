<?php 

//include "../inc/exemplo-01.php";
/*Comando include: inclui o arquivo de outro codigo PHP
no codigo atual.Exemplo acima: "inc/exemplo-01.php"*/
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
//require serve para incluir outro arquivo PHP no seu codigo.
/*require_once serve para caso este outro arquivo seja chamado
mais de uma vez não de erro, o comando ir considerar apenas uma chamada.*/
/*"require"/"require_once" tambem obriga que o arquivo exista e que esteja
funcionando bem, diferente do "include".*/
$resultado = somar(10, 25);

echo $resultado;

?> 