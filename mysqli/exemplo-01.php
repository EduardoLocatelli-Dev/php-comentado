<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");
// mysqli é uma classe nativa do PHP usada para conectar com bancos de dados MySQL.
if ($conn->connect_error) {
//connect_error é uma propriedade (atributo) do objeto de conexão.
//Esta linha verifica se houve algum erro ao tentar conectar ao banco de dados.
	echo "Error: " . $conn->connect_error;
    // Se houve erro na conexão, mostra a mensagem e para o programa.
	exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
//$stmt é o objeto que representa a consulta preparada.
//Ele permite configurar, passar os valores e executar o comando SQL com segurança.
//Os sinais de interrogação (?) são espaços reservados para os valores que serão inseridos depois.
//prepare é um método que serve para preparar um comando SQL de forma segua(no caso INSERT).  

$stmt->bind_param("ss", $login, $pass);
//"ss" indica que os dois valores são do tipo string.
//bind_param liga as variáveis aos espaços (?) da consulta SQL preparada.
$login = "user";
$pass = "12345";
//Define os valores para a primeira inserção.
$stmt->execute();
//Executa o comando com os valores atuais de $login e $pass.
$login = "root";
$pass = "!@#$";
//Define novos valores para a segunda inserção.
$stmt->execute();
//Executa o comando novamente com os novos valores.
?>