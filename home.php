<?php
    // Precisamos usar sessões, então você deve sempre iniciar sessões usando o código abaixo.
    //session_start();
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
                <h1 onClick="goHome()" id="nome_empresa" ><i class="fas fa-home"></i> &nbsp; B. H. Abra - Desenvolvimento WEB</h1>
                <b id="bem_vindo">Bem-vindo, <?=$_SESSION['nome']?>!</b>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
            </div>
        </nav>
        <div class="conteudo" id="div_conteudo">

        </div>

        <footer>
            <div class="container-fluid">
                <div class="footer">
                    <p>Copyright © 2024 B. H. Abra - Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>
    </body>

    <script src="js/custom_home.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
</html>
