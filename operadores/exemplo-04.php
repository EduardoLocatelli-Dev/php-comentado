<?php 

$a = 55.0;

$b = 55;
// = é operador de atribuição
var_dump($a > $b);
// var_dump mostra o calor + o tipo de dado
// > maior retorna o verdadeiro ou falso
echo "<br>";
// mostra apenas o valor (texto, número etc.)
var_dump($a < $b);
// < menor retorna verdadeiro ou falso
echo "<br>";

var_dump($a == $b);
// == compara os valores (igualdade apenas de valor)
echo "<br>";

var_dump($a === $b);
// compara valor e tipo (igualdade de identidade)
echo "<br>";

var_dump($a != $b);
//! é negação então != é "diferente"
echo "<br>";

var_dump($a !== $b);
// !== valida tambem o tipo de dado
?>