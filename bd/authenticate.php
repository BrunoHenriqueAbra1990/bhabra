<?php
	session_start();
	// Altere isso para suas informações de conexão.
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'bruno';
	// Tente conectar usando as informações acima.
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	if ( mysqli_connect_errno() ) {
		// Se houver um erro com a conexão, pare o script e exiba o erro.
		exit('Falha ao conectar ao MySQL: ' . mysqli_connect_error());
	}
	// Agora verificamos se os dados do formulário de login foram enviados, isset() verificará se os dados existem.
	
	if ( !isset($_POST['username'], $_POST['password']) ) {
		// Não foi possível obter os dados que deveriam ter sido enviados.
		exit('Por favor, preencha os campos de nome de usuário e senha!');
    }
	
	$usuario = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT * FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($con, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);

			if(($senha == $row_usuario['senha']) and (!($row_usuario['status']== 'INATIVO'))){
				$_SESSION['id_usuario'] 				= $row_usuario['id_usuario'];
				$_SESSION['nome'] 						= $row_usuario['nome'];
				$_SESSION['nivel'] 						= $row_usuario['nivel'];
				$_SESSION['usuario'] 					= $row_usuario['usuario'];

				$usuario = $_SESSION['nome'];
				header("Location: ../");
				$_SESSION['msg'] = "$usuario Login bem sucedido!";
				//echo $_SESSION['msg'];
			}
			else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: ../");
				//echo mysqli_error($conn);
			}
		}
	}
	
	else {
		// Senha incorreta
		echo 'Nome de usuário e/ou senha incorretos!';
	}

    $con->close();
?>
