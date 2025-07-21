<?php 

$nome = "Hcode";

echo $nome . " mais alguma coisa<br>";

$nome .= " Treinamentos";
/* serão exibidos os dois valores da variavel $nome 
graças a concatenação antes do sinal de igual.
caso ela não existisse seria exibido apenas "Treinamentos"
pois foi o ultimo valor imposto a variavel*/

echo $nome;

?>