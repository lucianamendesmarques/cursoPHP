<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//LIMIT é uma cláusula de limite que é usado para 
//especificar o número de registros a serem retornado;
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios =  "SELECT id, nome, email FROM usuarios LIMIT 3";
$resultado_usuario = mysqli_query($conn,$result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "ID : " . $row_usuario['id'] . "<br>";
	echo "Nome : " . $row_usuario['nome'] . "<br>";
	echo "E-mail : " . $row_usuario['email'] . "<br><hr>";
}

//Para selecionar  Orders LIMIT 2 OFFSET 5

$result_usuarios =  "SELECT id, nome, email FROM usuarios LIMIT 3 OFFSET 2";
$resultado_usuario = mysqli_query($conn,$result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "ID : " . $row_usuario['id'] . "<br>";
	echo "Nome : " . $row_usuario['nome'] . "<br>";
	echo "E-mail : " . $row_usuario['email'] . "<br><hr>";
}