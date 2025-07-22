<?php 

$meses = array(
//array: variavel com varios valores.    
      "Janeiro", "Fevereiro", "Março",
      "Abril", "Maio", "Junho",
      "Julho", "Agosto", "Setembro",
      "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
//foreach: para cada
//as significa "como"
    echo "Indice: ".$index. "<br>";
	echo "O mês é: ".$mes. "<br><br>";
//index diz o numero da posição de um item dentro de um array.	
}

?>