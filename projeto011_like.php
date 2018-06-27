<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//o operador LIKE é usado em uma cláusula WHERE para pesquisar um padrão especializado em uma coluna.
//todos que possuem aquela letra, tirando o porcento do lado refere que ira pesquisar os que não possue texto do lado.
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT * FROM usuarios WHERE nome LIKE '%a%'";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome: " . $row_usuario['nome'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
}