<?php 


$pessoa = array(
    'nome'=>'João',
    'idade'=>20
);

 foreach ($pessoa as &$value) {
//foreach lê todos os itens de um array um por um.
 	if (gettype($value) === 'integer') $value += 10;
//if é se.
//gettype mostra o tipo da variável.
//=== compara valor e tipo.
 	echo $value.'<br>';

 }

 print_r($pessoa);

//diferença de passar por valor e por referencia.
//por valor é como passar uma copia que pode ser modificada sem problema.
//por referencia: se passar por referencia e mecher, meche tambem na orignal.
?>