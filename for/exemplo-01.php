<?php 

for ($i = 0; $i < 1000; $i+= 5) {
//for: é um comando usado para repetir algo várias vezes
	if ($i >= 200 && $i <=800) continue;
/*if: é um comando que faz uma escolha.
É como dizer: se isso acontecer, faça aquilo.*/
/*continue é um comando que pula uma parte do codigo
e vai para a próxima repetição de um for, while ou outro loop.*/
	if ($i === 900) break;
//=== compara o valor e o tipo 
     echo $i . "<br>";

}
/*&& significa "e". As duas condições precisam
ser verdadeiras.*/
?>