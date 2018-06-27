<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//o operador BETWEEN é usada para selecionar valores dentro de um intervalo.
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT * FROM usuarios WHERE id BETWEEN 2 AND 4";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuarios['id'] . "<br>";
	echo "Nome: " . $row_usuarios['nome'] . "<br><hr>";
}