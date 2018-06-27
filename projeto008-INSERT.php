<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//A cláusula WHERE é usada para extrair somente os registros que satisfaçam um critério especifico.
//$nome é uma variavél para colocar os dados no banco de dados ou pode inserir diretamente '';
//NOW () =>hora atual
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nome = "Carlos";
$email = "carlos@celke.com.br";
$result_usuario = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '2', '3', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	echo "Inserido com sucesso!<br>";
	echo "ID: " . mysqli_insert_id($conn);	
}else{
	echo "Erro ao inserir o usuário!<br>";
}