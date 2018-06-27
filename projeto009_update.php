<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "UPDATE usuarios SET situacao_id='1', niveis_acesso_id = '1', modified=NOW() WHERE id='5'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	echo "Alterado com sucesso";
}else{
	echo "Erro ao alterar o usuário";
}