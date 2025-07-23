<?php 

class Carro {
//classe carro.
	private $modelo;
	private $motor;
	private $ano;
//private = atributos.
	public function getModelo(){

		return $this->modelo;

	}

	public function setModelo($modelo){

		$this->modelo = $modelo;

	}

	public function getMotor():float{
//float retorna um numero com virgula/ponto decimal.
		return $this->motor;

	}

	public function setMotor($motor){

		$this->motor = $motor;

	}

	public function getAno():int{
//int significa inteiro(vai retornar o numero inteiro).
		return $this->ano;

	}

	public function setAno($ano){

		$this->ano = $ano;

	}

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	
	}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());
?>