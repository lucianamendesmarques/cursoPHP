<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cursocelke";

// Alias SQL são usadas para fornecer para a tabela. ou para coluna. um nome temporario.
//Os alias são frequentemente usados para tornaar os nomes das colunas mais legiveis.
//Um alias só existe durante a duração da consulta//
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT id AS id_usuario, nome AS nome_usuario FROM usuarios";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id_usuario'] . "<br>";
	echo "Nome: " . $row_usuario['nome_usuario'] . "<br><hr>";
}