<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT COUNT(id) AS qnt_usuarios FROM usuarios WHERE situacao_id='1'";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuarios = mysqli_fetch_assoc($resultado_usuarios);

echo "Quantidade de usuários: " . $row_usuarios['qnt_usuarios'] ."<br>";