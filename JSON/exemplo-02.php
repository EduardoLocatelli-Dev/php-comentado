<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);
//json_decode transforma json em um array.
//o true ali serve para o array não virar um objeto.
var_dump($data);

?>