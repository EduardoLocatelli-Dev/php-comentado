<?php 

$total = 150;
$desconto = 0.9;

do {
//do: faça.
	$total *= $desconto;
//*= multiplica e ja atualiza o valor da variavel.
} while ($total > 100);
//while: apena enquanto.
echo $total;
//do while executa pelo menos uma vez mesmo a condição sendo falsa.
?>