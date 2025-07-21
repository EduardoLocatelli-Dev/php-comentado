<?php
/*
$anoNascimento = 1990;

%nomeCompleto = "";*/
//Na linha de baixo temos uma variavel com número no nome
$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome; //concatenação = junta duas coisas
/*O operador . (ponto) em PHP serve para juntar strings.

Resultado: "João" . " " . "Rangel" → "João Rangel"*/

echo $nomeCompleto;
// O comando echo imprime algo na tela

exit;
/* O comando exit encerra imediatamente a execução so script.
Nada abaixo deste comando sera executado*/

echo $nome1;

echo "<br/>";
// o comando <br/> quebra uma linha

//unset($nome1);    O comando unset limpa uma variavel (tira da memoria)

if (isset($nome1)) {
/*isset: serve para saber se uma variavel existe, como no caso 
    a $nome1*/
    echo $nome1;

}



?>