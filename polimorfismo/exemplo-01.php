<?php 

abstract class animal {

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal {

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal {

	public function falar(){

		return "Mia";
	}

}

class Passaro extends Animal {

	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e " . parent::mover();
//parent se refere a classe "pai" 
/*a concatenação . parent::mover esta chamando a
public function mover da abstract class*/
	}

}
//as seguintes variaveis estão ligadas as respectivas classes 
//e são baseadas nestas classes.
$pluto = new Cachorro();
// $pluto é uma instância (objeto) da classe Cachorro.
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "--------------------------<br/>";

$garfield = new Gato();
// Criamos objetos com new, que instancia a classe.
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "--------------------------<br/>";

$ave = new Passaro();
//new é usado para criar um novo objeto a partir de uma classe.
echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";


/*polimorfismo é ter metodos com o mesmo nome na classe pai e 
na classe filha que fazem coisas diferentes.*/
?>