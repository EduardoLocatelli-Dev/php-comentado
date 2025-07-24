<?php 

interface Veiculo {
//palavra reservada interface.
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
//public function são os metodos.
}

class Civic implements Veiculo {
//aqui a classe Civic é ligada a interface veiculos.
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

$carro = new Civic();
/*instancia da classe Civic, ou seja, carro baseado no que foi
definido na classe.*/
$carro->trocarMarcha(1);
//com isso você pode acessar os métodos da classe.

//Interface ajuda a organizar o codigo e a integrar APIs.
?>