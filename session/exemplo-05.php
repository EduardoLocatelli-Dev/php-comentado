<?php 

require_once("config.php");
//require_once: chama outro arquivo PHP
echo session_save_path();
//Obtém e/ou define o caminho para armazenamento da sessão atual.
//Exemplo: C:\xampp\tmp
echo "<br>";

var_dump(session_status());
//session_status retorna o status atual da sessão.
echo "<br>";

switch(session_status()) {
//switch verifica varios cases diferentes de uma variavel.
	case PHP_SESSION_DISABLED: //valor retornado de session_status.
    echo "as sessões estiverem desabilitadas.";//descrição da documentação
	break;                                     //sobre o valor retornado.

	case PHP_SESSION_NONE: //valor retornado de session_status.
    echo "as sessões estiverem habilitadas, mas nenhuma existir.";
	break;

	case PHP_SESSION_ACTIVE: //valor retornado de session_status.
    echo "as sessões estiverem habilitadas, e uma existir.";
	break;

}


?>