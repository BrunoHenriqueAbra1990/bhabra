<?php
    // Precisamos usar sessões, então você deve sempre iniciar sessões usando o código abaixo.
    session_start();
    // Se o usuário não estiver logado redireciona para a página de login...
    if (!isset($_SESSION['nome'])) {
        header('Local: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
			include "links_includes/head.php";
		?>
    </head>
    <body class="loggedin">
        <nav class="navtop">
        <div>
        <h1>Título do site</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
        </nav>
        <div class="conteúdo">
            <h2>Página inicial</h2>
            <p>Bem-vindo de volta, <?=$_SESSION['nome']?>!</p>
        </div>
    </body>
</html>
