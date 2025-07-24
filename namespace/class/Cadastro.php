<?php 

class Cadastro {

	private $nome;
	private $email;
	private $senha;
//private são modificadores de acesso como public e protected.
	public function getNome():string
//get = retorna o valor guardado(exemplo: mostrar nome, email, etc.)
	{
		return $this->nome;	
	}

	public function getEmail():string
	{
		return $this->email;	
	}

	public function getSenha():string
	{
		return $this->senha;	
	}

	public function setNome($nome){
//set = guarda um valor(exemplo: nome, email, etc.)
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function __toString(){
//o método __toString define o que sera mostrado quando você tentar imprimir um objeto como texto.
		return Json_encode(array(
// Cria uma lista com os dados e transforma em texto JSON para retornar
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));

	}

}

?>