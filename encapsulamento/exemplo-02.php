<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

class Programador extends Pessoa {
//esta class é uma herança da class pessoa.
//portanto não tera acesso direto ao atributo "private $senha"
//pois é exclusivo da propria classe onde foi declarado.
//Herança permite reutilizar código e acessar propriedades/métodos public e protected.
	public function verDados(){

		echo get_class($this) . "<br/>";
//get_class permite que se descubra de onde esta vindo a function verDados
//que no caso esta vindo da classe programador.
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

$objeto = new Programador();

//echo $objeto->senha . "<br/>";

$objeto->verDados();

?>