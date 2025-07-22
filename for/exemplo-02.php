<?php 

for ($i=0; $i <10; $i--) { 

	echo $i. " ";

}
/*este codigo cria um loop que se feito em um site 
grande pode chegar a derrubar o servidor.
Motivo: ao colocar $i-- o codigo vai começar a contar os valores
negativos infinitamente, pois só pararia quando
chegasse a 10.*/
?>