<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
	
}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{

		echo "O veiculo acelerou até " . $velocidade . " km/h";

	}

	public function frenar($velocidade)
	{

		echo "O veiculo freinou até " . $velocidade . " km/h";

	}

	public function trocarMarcha($marcha)
	{

		echo "O veiculo engatou a marcha " . $marcha;

	}

}

//este arquivo tem a classe abstrata e a interface.
//este arquivo sera chamado em outros codigos.(no caso o exemplo 01 e 02)
?>