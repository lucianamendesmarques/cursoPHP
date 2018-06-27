<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT user.id, user.nome nome_user, user.email, user.niveis_acesso_id,
nivac.nome nome_niv_ac
FROM usuarios user
RIGHT JOIN niveis_acessos AS nivac ON nivac.id=user.niveis_acesso_id";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome do usuario: " . $row_usuario['nome_user'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br>";
	echo "Nome do Nivel de Acesso: " . $row_usuario['nome_niv_ac'] . "<br><hr>";
}
