<?php   //função anonima.

function test($callback){
//function recebe o parametro $callback.
	//Processo lento

	$callback();
//variavel callback com função anonima.
}



test(function(){
//testa o condigo.
	echo "Terminou!";

});

?>