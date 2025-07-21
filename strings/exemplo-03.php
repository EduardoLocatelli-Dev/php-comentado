<?php 

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
//str_replace substitui um valor por outro dentro de uma string.
/*str_replace no caso a cima troca o "o" por "0"
"e" por "3" na variavel $empresa*/
echo $empresa;

?>