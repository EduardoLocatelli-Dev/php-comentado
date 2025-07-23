<?php 

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1 week");
//strtotime retorna um timestamp. Converte uma data em texto.
echo date("l, d/m/Y", $ts);

?>