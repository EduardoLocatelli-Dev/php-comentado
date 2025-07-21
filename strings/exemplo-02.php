<?php 

$nome = "joão rangel";

$nome = strtoupper($nome);
//strtoupper deixa tudo em MAIUSCULO 
echo $nome; 

$nome = strtolower($nome);
//strtolower deixa tudo em minusculo
echo "<br>";

echo $nome;

echo "<br>";

echo ucfirst($nome);
//ucfirst deixa apenas a primeira letra MAIUSCULA
echo "<br>";

echo ucwords($nome);
//ucwords deixa a primeira letra de cada palavra MAIUSCULAS
?>