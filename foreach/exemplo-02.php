<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
/*cria um formulario simples com:
--caixa de testo para digitar nome 
--campo de data para escolher data de nascimento
--e um botão OK que envia as informações*/
</form>	
<?php 

if (isset($_GET)) {
//if ou se: se uma condição for verdadeira ele ira executar.
/*isset: função que verifica se uma variavel existe
e tem valor diferente de null.*/    
    foreach ($_GET as $key => $value) {
	//foreach significa para cada
    //$_GET é um array super global. 
       echo "Nome do campo:" . $key . "<br>";

       echo "Valor do campo: " . $value;

       echo "<hr>";
/*<hr> diferente de <br> que só pula uma linha
<hr> desenha uma linha da seguinte forma: ----------*/
    }


}

  ?>