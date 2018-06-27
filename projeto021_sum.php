<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT SUM(qnt_acessos) AS qnt_acessos FROM usuarios WHERE situacao_id='1' AND niveis_acesso_id='2'";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuarios = mysqli_fetch_assoc($resultado_usuarios);

echo "Total de acesso ao site: " . $row_usuarios['qnt_acessos'] . "<br>";
