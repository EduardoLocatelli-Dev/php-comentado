<?php 

require_once("config.php");
//require_once chama outro arquivo PHP.
session_unset($_SESSION['nome']);
//session_unset apaga uma variavel de sessão.
echo $_SESSION['nome'];
//aqui mostra o conteudo da sessão
session_destroy
//session_destroy limpa a variavel e remove o usuario da sessão. 
?>