<?php
 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $dbname = "cursocelke";

$conn = mysqli_connect($servidor, $usuario, $senha);

if(!$conn){
	die("falha na conaxao!" . mysqli_connect_error());
}else{
	echo "conexao realizada com sucesso!";
}