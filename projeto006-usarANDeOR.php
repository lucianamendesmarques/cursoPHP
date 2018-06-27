<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//O AND (E) & (or) operadores são usados para filtrar registro com base em mais de uma condição.
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT * FROM usuarios WHERE situacao_id='1' AND niveis_acesso_id='1'";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID : " . $row_usuarios['id'] . "<br>";
	echo "NOME : " . $row_usuarios['nome'] . "<br>";
	echo "E-MAIL : " . $row_usuarios['email'] . "<br>";
	echo "SITUAÇÂO_ID : " . $row_usuarios['situacao_id'] . "<br>";
	echo "NIVEI_ACESSO_ID : " . $row_usuarios['niveis_acesso_id'] . "<br><hr>";
}