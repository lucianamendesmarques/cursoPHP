<!-- está dando erro ?????-->

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//A cláusula LEFT JOIN permite obter não apenas os dados relacionados de duas tabelas, mas
//também os dados não relacionados
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT nivac.nome nome_niv_ac,
user.id, user.nome nome_user, user.email, user.niveis_acesso_id
FROM niveis_acessos nivac
LEFT JOIN usuarios AS user ON user.niveis_acesso_id = nivac.id";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome do usuario: " . $row_usuario['nome_user'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br>";
	echo "Nome do Nivel de Acesso: " . $row_usuario['nome_niv_ac'] . "<br><hr>";
}
