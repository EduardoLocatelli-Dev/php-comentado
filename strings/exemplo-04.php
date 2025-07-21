<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");
/*strpos encontra em que posição esta um palavra ou trecho
dentro de um texto. No caso acima vai retornar
int(17) pois a partir da primeira letra se deve contar
17 casas para chegar na palavra "mãe"*/
$texto = substr($frase, 0, $q);
/*substr pega um pedaço da string e exibe na tela.
exemplo do trecho acima: string(17)"A repetição é"*/
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
/*strlen conta quantas letras ou caracteres tem um texto.
No caso acima o resultado sera: string(15)" da retenção."
O $q + neste caso faz com que a frase seja contada daquele ponto em diante.*/
echo "<br>";

var_dump($texto2); 

?>