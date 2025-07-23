<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b ,$c){
//__construct inicializa valores assim que o objeto é criado.
// No caso a cima __construct inicia os valores de a, b, e c.
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct(){
//__destruct é um metodo especial que é chamado automaticamente
// quando o objeto é destruido.
//__destruct é o "fim da vida" do objeto.
		//var_dump("DESTRUIR");

	}

	public function __toString(){
//__toString é um metodo especial que define como o 
// objeto sera exibido como texto(string).
		return $this->logradouro.", ".$this->numero." - ".$this->cidade;

	}

}



$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

echo $meuEndereco;

?>