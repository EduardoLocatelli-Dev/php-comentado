<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {
//uma classe só pode herdar de uma classe abstrata.
//aqui é criada a classe abstrata e é inplementada a interface veiculo.
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

class DelRey extends Automovel {
//aqui a classe delrey extende da classe abstrata.
	public function empurrar(){



	}

}

$carro = new DelRey();
//new é usado para criar um novo objeto a partir de uma classe.
$carro->acelerar(200);
//-> usa os metodos da classe. 
//aqui estamos chamando o método acelerar no objeto carro 
//e passando o calor 200.
?>