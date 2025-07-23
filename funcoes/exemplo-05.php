<?php 


$a = 10;

function trocaValor(&$b){
//& faz a passagem de parametro por referencia.
    $b += 50;

    return $b;

}

echo trocaValor($a);
echo "<br>";
//este retorna 60 pois a$ passa pela função e vira 60
echo trocaValor($a);
echo "<br>";
echo $a;
//este retorna 10 pois chama apenas a função original $a

?>