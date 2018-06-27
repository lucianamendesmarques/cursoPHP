<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

//(int) é uma converção
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT AVG(qnt_acess) AS qnt_acess FROM usuarios";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuario = mysqli_fetch_assoc($resultado_usuarios);

echo "Media de acesso: " . (int) $row_usuario['qnt_acess'] . "<br>";
