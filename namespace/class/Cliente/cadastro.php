<?php 

namespace Cliente;

class Cadastro extends \Cadastro {
//\volta na raiz e na raiz acha a classe cadastro e então extendemos.
//(herdamos tudo de la)
	public function registrarVenda(){
//metodo publico onde registramos venda.
		echo "Foi registrada uma venda para o cliente".$this->getNome();
//echo do registro.
	} 

}

?>