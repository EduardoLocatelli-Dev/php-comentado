<?php 

echo "<select>";
/*select inicia uma lista suspensa (menu de opções)
em HTML e o PHP esta mandando isso para a tela.*/
for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
/*if: é um comando que faz uma escolha.
É como dizer: se isso acontecer, faça aquilo.*/
//Y pega o ano atual 	
	echo '<option value= "'.$i.'">'.$i.'</option>';
}
//option value: é um item dentro de uma lista.(select)
// value é o valor invisivel que sera enviado
echo "</select>"

?>