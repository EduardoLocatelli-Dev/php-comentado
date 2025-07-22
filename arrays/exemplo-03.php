<?php 

$pessoas = array();

array_push($pessoas, array(
     'nome'=>'João',
     'idade' =>20
//array_push adiciona um item no array depois de ja criado.
//no exemplo acima adicionamos um array dentro de outro usando array_push.     
));

array_push($pessoas, array(
     'nome'=>'Glaucio',
     'idade' =>25
/*o segundo array é adicionado para podermos inserir
os dados nome e idade.*/     
 ));

print_r($pessoas[0]['nome']);
//print_r exibe o array.
?>