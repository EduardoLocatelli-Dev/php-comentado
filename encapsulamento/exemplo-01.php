<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";
//public, protected e private são modificadores de acesso.
//nome idade e senha são atributos.
	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

$objeto = new Pessoa();
//aqui o objeto é instanciado usando "new".
//echo $objeto->senha . "<br/>";

$objeto->verDados();
/*Este método público permite acessar e exibir os atributos da classe, 
incluindo os protegidos e privados, porque ele está definido dentro da própria classe. 
Mesmo que propriedades protegidas e privadas não possam ser acessadas diretamente fora da classe, 
elas podem ser acessadas por métodos públicos que pertençam à classe. */


?>