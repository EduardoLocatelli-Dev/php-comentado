<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
//$conn->query são variavel de conexão com o metodo query.
//esta linha vai retornar um resultado do banco de dados que sera guardada na variavel $result.
$data = array();
//esta variavel guarda dados.
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//$result->fetch_array retorna um dado se ele existir.
//se tiver esses dados, sera atribuido na variavel $row.
	array_push($data, $row);
//Adiciona o valor $row no final do array $data.
}

echo json_encode($data);
//Converte o array $data para formato JSON e imprime na tela.
?>