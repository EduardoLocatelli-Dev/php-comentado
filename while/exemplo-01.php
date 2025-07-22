<?php 

$condicao = true;

while ($condicao) {
/*enquanto a condição for true o codigo entre{} sera repetido.
graças ao while.*/	
//while: significa faça enquanto; desde que a condição seja verdadeira.
	$numero = rand(1, 10);
//A função rand faz um sorteio.
	if ($numero ===3) {
//is ou se: se uma codição for verdadeira ele ira executar.
//=== compara valor e tipo.
        echo "TRÊS!!!";
        $condicao = false;

	}

	echo $numero . " ";

}

?>