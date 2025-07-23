<?php 

class Pessoa {
//aqui a palavra resevada class é criada e posta um nome.
	public $nome;//Atributo
//public faz parte do encapsulamento.
	public function falar(){//Método

		return "O meu nome é ".$this->nome;
/*$this aparece automaticamente dentro de uma classe
quando você esta dentro de um metodo(função)
que pertence aquela classe. $this significa "este objeto aqui"*/
	}

}
//abaixo, fora da classe, criamos a "Pessoa".
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


/*---------OQUE É ENCAPSULAMENTO--------
	Encapsulamento é o principio de esconder os detalhes de 
 uma classe e controlar o acesso a seus dados e comportamentos.
 public: qualquer lugar(acesso total)
 protected: somente na classe e nas herdeiras
 private: somente dentro da própria classe*/
?>