<?php 

class Documento {
//class propositalmente generica e de facil identificação
//(serve para qualquer tipo de documento).
	private $numero;

	public function getNumero()
	{

		return $this->numero;

	}

	public function setNumero($n)
	{

		$this->numero = $n;

	}

}


class CPF extends Documento {
//extends diz que tal classe é "filha de outra"(tem alguma ligação).
	public function validar():bool //bool representa valores lógicos
	{                              //true ou false. (0,"",null e [])

		$numeroCPF = $this->getNumero();
//$this é uma variavel interna do PHP. Server para referenciar atributos
//e metodos dentro de outros metodos.
		//Validação do CPF

		return true;

	}

}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();
 
?>