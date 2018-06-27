<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Crud - Listar</title>
	</head>
	<body>
		<?php
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$dbname = "cursocelke";
			
			//CRUD - Criar o Listar com MySQLi
			$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
			?>
				<a href="projeto023_crud_inserir.php">Cadastrar</a>
			<?php
			echo "<h1>Listar usuários</h1>";
			if(isset($_SESSION['msg'])){
				echo "<p>".$_SESSION['msg']."</p>";
				unset($_SESSION['msg']);
			}
			$result_qnt_user= "SELECT COUNT(id) AS qnt_usuarios FROM usuarios";
			$resultado_qnt_user = mysqli_query($conn, $result_qnt_user);
			
			$row_qnt_user = mysqli_fetch_assoc($resultado_qnt_user);
			echo "<h3>Quantidade de Usuários: " . $row_qnt_user['qnt_usuarios'] . "</h3>";
			
			$result_usuarios = "SELECT user.*,
			sit.nome nome_sit,
			nivac.nome nome_niv_ac
			FROM usuarios user
			INNER JOIN situacaos sit ON sit.id = user.situacao_id
			INNER JOIN niveis_acessos nivac ON nivac.id = user.niveis_acesso_id";
			$resultado_usuarios = mysqli_query($conn, $result_usuarios);
			
			while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
				echo "ID: " . $row_usuario['id'] . "<br>";
				echo "Nome: " . $row_usuario['nome'] . "<br>";
				echo "E-mail: " . $row_usuario['email'] . "<br>";
				echo "Situação: " . $row_usuario['nome_sit'] . "<br>";
				echo "Nível de acesso: " . $row_usuario['nome_niv_ac'] . "<br><hr>";
			}
		?>
	</body>
</html>