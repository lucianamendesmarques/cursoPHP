<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//distinc palavra reservada para selecionaar
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$result_usuario = "SELECT DISTINCT email FROM usuarios";

//precisa executar a query depois atribuir a variavél
$resultado_usuario =  mysqli_query($conn, $result_usuario);

while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "Email : " . $row_usuario['email'] . "<br><br>";
}
	