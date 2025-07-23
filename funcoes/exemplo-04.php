<?php 

function ola(){


      $argumentos = func_get_args();
/*func_get_args recupera e retorna em um array todos os argumentos
que forem passados como parametro para esta função.*/
      return $argumentos;


}

var_dump(ola("Bom dia", 10)); 
//aqui o var_dump mostra o tipo e o valor retornado, e ola chama a função.
?>