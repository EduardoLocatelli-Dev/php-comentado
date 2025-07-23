<?php 

$dt = new DateTime();

$periodo = new DateInterval("P15D");
//DateInterval define quanto tempo adicionar ou subtrair.
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);
//metodo add adiciona uma data.(no caso adiciona $periodo)
echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>