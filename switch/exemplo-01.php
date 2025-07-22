<?php 

$diaDaSemana = 8;//date("w"); 
//date mostra a data e ou hora atual formatada do jeito que você quiser
//Exemplo: echo date("d/m/y") echo date("H:i:s") echo date("d/m/Y H/i")
switch ($diaDaSemana) {
//switch verifica varios cases diferentes de uma variavel.
      case 0:  //case é usado dentro do "switch" para verificar um valor.
      echo "Domingo"; //se o valor for 0, echo domingo e então break. 
      break;   //pausa a verificação.

      case 1:
      echo "Segunda-feira";
      break;

      case 2:
      echo "Terça-feira";
      break;

      case 3:
      echo "Quarta-feira";
      break;

      case 4:
      echo "Quinta-feira";
      break;

      case 5:
      echo "Sexta-feira";
      break;

      case 6:
      echo "Sábado";
      break; 

      default:  //executa se nenhum "case" combinar.
      //default: se não cair em nenhum case sera executado o padrão estipulado. 
      echo "Data invalida!";
      break;

}

/*A diferença entre switch e if é que no switch
eu ja sei quais são as opçoes que podem 
acontecer ou não.*/
?>