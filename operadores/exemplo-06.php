<?php 

$a = NULL;
//NULL é a ausencia de valor (a variavel só esta vazia)
$b = 8;

$c = 10;

echo $a ?? $b ?? $c;
//?? significa se for NULL mostre a proxima variavel
?>