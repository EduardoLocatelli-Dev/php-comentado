<?php 

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
//if ou se: se uma condição for verdadeira ele ira executar.
    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {
//else if: usado quando você quer testar mais de uma condição.
    echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {

   echo "Adulto";

} else {
//else significa se não
	echo "Idoso";
	
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";
//? se for verdade ou então
//: separa as duas respostas possiveis
//a linha toda é um operador ternario 
//operador ternario é uma forma curta de escrever um "if...else".

?>