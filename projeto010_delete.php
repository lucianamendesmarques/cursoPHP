<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "DELETE FROM usuarios WHERE id='5'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	echo "Apagado com sucesso";
}else{
	echo "Erro: usuário não foi apagado";
}