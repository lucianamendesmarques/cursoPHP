<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//A cláusula WHERE é usada para extrair somente os registros que satisfaçam um critério especifico.
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT id, nome, email, situacao_id FROM usuarios WHERE situacao_id='2'";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID : " . $row_usuarios['id'] . "<br>";
	echo "NOME : " . $row_usuarios['nome'] . "<br>";
	echo "E-MAIL : " . $row_usuarios['email'] . "<br>";
	echo "SITUAÇÂO_ID : " . $row_usuarios['situacao_id'] . "<br><hr>";
}
