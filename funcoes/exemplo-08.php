<?php 

function soma(float ...$valores):float {
//float representa numeros com virgula(ou seja, numeros decimais).
	return array_sum($valores);
//array_sum retorna a soma dos valores de um array.
}

echo var_dump (soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>