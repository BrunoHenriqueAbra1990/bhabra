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
                <h1 onClick="goHome()" id="nome_empresa" >B. H. Abra - Desenvolvimento WEB</h1>
                <b id="bem_vindo">Bem-vindo, <?=$_SESSION['nome']?>!</b>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
            </div>
        </nav>
        <div class="conteudo">
            <div class="content " >
                Menu dos Conteudos
            </div>

            <div class="sub_conteudo">
                <div class="form-row col-md-12 menu_opcoes">
                    <div class="col-md-2 contorno">
                        <b onclick="Mudarestado('divCadastros')">Cadastros</b>
                        <div id="divCadastros" class="sub_menu_opcoes" style='display: none;' >
                            <ul>
                                <li> Fornecedores    </li>
                                <li> Clientes        </li>
                                <li> Produtos        </li>
                                <li> Usuários        </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 contorno">
                        <b onclick="Mudarestado('divSegundo')">Segundo Menu</b>
                        <div id="divSegundo" class="sub_menu_opcoes" style='display: none;' >
                            <ul>
                                <li> Primeiro    </li>
                                <li> Segundo     </li>
                                <li> Terceiro    </li>
                                <li> Quarto      </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <b>Terceiro Menu</b>
                    </div>

                    <div class="col-md-2 ">
                        <b>Quarto Menu</b>
                    </div>

                    <div class="col-md-2 ">
                        <b>Quinto Menu</b>
                    </div>

                    <div class="col-md-2 ">
                        <b>Sexto Menu</b>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container-fluid">
            <div class="footer">
                <p>Copyright © 2024 B. H. Abra - Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="js/custom_home.js"></script>
</html>
