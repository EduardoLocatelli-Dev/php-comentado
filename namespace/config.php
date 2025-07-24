<?php 

spl_autoload_register(function($nameClass){
/*spl_autoload_register registra uma função que sera chamada
automaticamente sempre que uma classe for usada e ainda 
não tiver sido incluida.*/
	var_dump($nameClass);

	$dirClass = "class";
//$dirClass define a pasta onde os arquivos de classe estão.
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
//monta i caminho completo até o arquivo da classe.
	if (file_exists($filename)) {
//file_exists verifica se o arquivo existe antes de tentar incluir.
		require_once($filename);
//require_once inclui o arquivo da classe (uma unica vez).
	} 

});

?>