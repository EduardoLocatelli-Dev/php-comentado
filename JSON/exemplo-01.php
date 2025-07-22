<?php 

$pessoas = array();
//array é uma variavel com varios valores.
array_push($pessoas, array(
     'nome'=>'João',
     'idade' =>20
//array_push adiciona um item no array depois de ja criado.
));

array_push($pessoas, array(
     'nome'=>'Glaucio',
     'idade' =>25
 ));

echo json_encode($pessoas);
//json_encode transforma um array em JSON.
//JSON é um formato de texto que serve para trocar dados entre sistemas.
?>