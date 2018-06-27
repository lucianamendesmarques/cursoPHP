<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT * FROM usuarios";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//$row_usuario = mysqli_fetch_assoc($resultado_usuario);
//var_dump($row_usuario);
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	//var_dump($row_usuario);
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome: " . $row_usuario['nome'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
}