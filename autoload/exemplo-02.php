<?php 

function incluirClasses($nomeClasse){
//incluirClasses carrega automaticamente a classe quando for utilizada.
//essa função tenta carregar o arquivo da classe.
	if (file_exists($nomeClasse. ".php") === true) {
//file_exists verifica se existe um arquivo com o nome da classe.
		require_once($nomeClasse. ".php");
//require_once faz: se existir, inclui o arquivo.
	}

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
/*spl_autoload_register de forma simples diz: se eu for usar uma classe que ainda
não foi carregada, chama esta função aqui para tentar carregar o arquivo dela.*/
	if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php") === true) {
//file_exists: verifica se existe o arquivo dentro da pasta "Abstratas".
		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
//DIRECTORY_SEPARATOR: é uma constante pré-definida do PHP. Representa o caractere usado para separar pastas(diretórios) no sistema operacional.
	}

});

$carro = new DelRey();

$carro->acelerar(80);

?>