<?php 

function ola($texto="Mundo", $periodo="Bom dia"){
/*function: bloco de codigo que é criado uma vez e pode ser
usado depois.*/ 
	return "Olá $texto! $periodo! <br>";

}

echo ola("Mundo","Bom dia");
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");

?>