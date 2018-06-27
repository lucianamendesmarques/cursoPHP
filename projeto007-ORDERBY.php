<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//O ORDER BY palavras-chave é usado para classificar o resultado por um ou mais colunas.
//DESC => ordem decrescente. ASC ordem crescente pelo id mas pode mudar e clocar o nome.
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT * FROM usuarios ORDER BY nome ASC";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID : " . $row_usuarios['id'] . "<br>";
	echo "NOME : " . $row_usuarios['nome'] . "<br>";
	echo "E-MAIL : " . $row_usuarios['email'] . "<br><hr>";
}