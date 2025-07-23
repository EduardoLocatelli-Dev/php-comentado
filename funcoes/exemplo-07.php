<?php 

function soma(int ...$valores) {

	return array_sum($valores);
//array_sum retorna a soma dos valores de um array.
}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>