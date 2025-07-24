<?php 

require_once("config.php");
//require_once inclui o conteudo do arquivo config.php 
//no aquivo atual.(como se fosse um copia e cola)
use Cliente\Cadastro;
//use usa um namespace. no caso "Cliente".
$cad = new Cadastro();
//agora esta classe é aquela que esta dentro de cliente.
$cad->setNome(" Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");
//aqui são adicionados os dados aos objetos.
$cad->registrarVenda();
//registrarVenda é um metodo.
?>